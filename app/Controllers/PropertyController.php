<?php namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Session\Session;

use App\Models\PropertyModel;
use App\Models\AgencyModel;
use App\Models\PropertyImageModel;


class PropertyController extends BaseController
{
    use ResponseTrait;

    protected $propertyModel;

    protected $agencyId;

    protected $session;

    protected $agencyModel;

    protected $propertyImageModel;


    public function __construct()
    {
        $this->propertyModel = new PropertyModel();

        $this->agencyModel = new AgencyModel();

        $this->propertyImageModel = new PropertyImageModel();


        $session = session();

        if(isset($_SESSION['agency']['id'])){
        $this->agencyId = $_SESSION['agency']['id'];
        }
    }
    public function view($id)
    {
        $propertyModel = new \App\Models\PropertyModel();
        $propertyImageModel = new \App\Models\PropertyImageModel(); // Make sure to load this model



        // Fetch the property by its ID
        $property = $propertyModel->find($id);

        $images = $this->propertyImageModel->getImagesByPropertyId($id);

        if (!$property) {
            // If no property is found, show an error message or redirect
            return redirect()->to('/all_properties')->with('error', 'Property not found.');
        }

        $agency = $this->agencyModel->getAgencyDataByID($property['agency_id']);

        $propertyModel->incrementViewCount($id);

        // Pass the property data to the view
        return view('properties/property_view', [
            'property' => $property,
            'images' => $images,
            'agency' => $agency,
        ]);
    }


    public function manageProperties()
    {
        // Fetch properties for a given agency
        $data['properties'] = $this->propertyModel->where('agency_id', $agencyId)->findAll();
        
        echo view('properties/manage_properties', $data);
    }
    public function addProperty()
{
    helper(['form', 'url']);
    
    $propertyModel = new \App\Models\PropertyModel();
    $propertyImageModel = new \App\Models\PropertyImageModel(); // Make sure to include this model at the top

    $session = session();
    
    $data = $this->request->getJSON(true) ?? $this->request->getPost();

    if ($this->request->getMethod() === 'post') {
        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required|string|max_length[255]',
            'description' => 'required|string',
            'fullAddress' => 'required|string', // This should match your form's address field
            'price' => 'required|numeric', // Make sure price is numeric
            // 'virtual_tour_url' => 'required|string', // Uncomment if you add this field to your form
            // Add other validation rules for new form fields if necessary
        ]);
        
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        if ($session->has('agency')) {
            $data['agency_id'] = $this->agencyId ;
        } else {
            // Default to 1 or handle how you prefer
            $data['agency_id'] = 1; // Or consider redirecting to login if agency_id is critical
        }

        // Prepare your address data (you may need to combine fields here)
        $data['address'] = $data['fullAddress']; // Ensure this matches the field in the database

        // If your form includes latitude and longitude, make sure they are floats
        // $data['latitude'] = floatval($data['latitude']);
        // $data['longitude'] = floatval($data['longitude']);
        
        // Handle other necessary data preparation here
        
        if ($propertyModel->insert($data)) {
            // Retrieve the current values for 'total_properties_listed' and 'active_properties_listed'
            $currentAgencyData = $this->agencyModel->find($this->agencyId);
            $propertyId = $propertyModel->getInsertID(); // Get the ID of the newly created property

            $images = $this->request->getFiles();

            if($images) {
                foreach($images['images'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        // You should use a better naming strategy to avoid overwriting files
                        $newName = $img->getRandomName();
                        $img->move(WRITEPATH . 'uploads', $newName); // Adjust path as needed
    
                        // Save the image data in the property_images table
                        $propertyImageModel->insert([
                            'property_id' => $propertyId,
                            'image_url' => '/uploads/' . $newName, // Adjust the path as needed
                            'alt_text' => 'Property image' // You might want to get this from user input
                        ]);
                    }
                }
            }

            // Increment the values
            $updatedAgencyData = [
                'active_properties_listed' => $currentAgencyData['active_properties_listed'] + 1,
            ];
        
            // Update the agency data with the new values
            $this->agencyModel->update($this->agencyId, $updatedAgencyData);
        
            return redirect()->to('/agency-main'); // Adjust the redirect path as needed
        } else {
            return redirect()->back()->withInput()->with('errors', ['Failed to save property.']);
        }
    }
    
    return view('agency/add_property_form');
}
public function editProperty($id)
{
    helper(['form', 'url']);
    $property = $this->propertyModel->find($id);

    if (!$property) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Property not found');
    }

    return view('properties/edit_property', ['property' => $property]);
}

public function updateProperty($id)
{
    helper(['form', 'url']);

    $data = $this->request->getPost();
    unset($data['csrf_test_name']); // Exclude the CSRF token from the update data

    // Perform validation here
    $validation = \Config\Services::validation();
    // ... set your validation rules if needed

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    // Prepare the data for update, ensuring only allowed fields are included
    $updateData = [];
    foreach ($this->propertyModel->allowedFields as $field) {
        if (isset($data[$field])) {
            $updateData[$field] = $data[$field];
        }
    }

    // Attempt to update the property
    if ($this->propertyModel->update($id, $updateData)) {
        // Redirect to a success page, for example a property list
        return redirect()->to('/properties/manage');
    } else {
        // Redirect back with an error message
        return redirect()->back()->withInput()->with('errors', ['Failed to update property.']);
    }
}



    public function getPropertiesWithImagesByAgencyId(int $agencyId)
{
    $properties = $this->propertyModel->getPropertiesByAgencyId($agencyId);
    
    foreach ($properties as &$property) {
        $property['images'] = $this->propertyImageModel->getImagesByPropertyId($property['id']);
    }
    
    return $properties;
}


    public function mapData()
    {
        $propertyModel = new PropertyModel();

        try {

            $properties = $this->propertyModel->findAll();
    
            // Directly set the JSON response with the properties array.
            return $this->response->setJSON($properties);
        } catch (\Exception $e) {
            // Log the exception message
            log_message('error', $e->getMessage());
            // Respond with a 500 error code and JSON error message
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                                  ->setJSON(['error' => $e->getMessage()]);
        }
    }
    public function getAgencyPlaces()
    {
        try {
            $session = session();
            $propertyModel = new PropertyModel();
            $agencyId = $_SESSION['agency']['id'];
            $properties = $propertyModel->getPropertiesByAgencyId($agencyId);

    
            // Directly set the JSON response with the properties array.
            return $this->response->setJSON($properties);
        } catch (\Exception $e) {
            // Log the exception message
            log_message('error', $e->getMessage());
            // Respond with a 500 error code and JSON error message
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                                  ->setJSON(['error' => $e->getMessage()]);
        }
    }
public function fetchHotProperties() {
    $propertyModel = new PropertyModel();
    $properties = $propertyModel->getHotProperties();

    // Create a model for property_images if you don't already have one
    $propertyImagesModel = new PropertyImageModel(); 

    foreach ($properties as &$property) {
        // Fetch the first image for each property
        $image = $propertyImagesModel->where('property_id', $property['id'])
                                     ->first();

        // Add image details to the property array
        if ($image) {
            $property['image_url'] = $image['image_url'];
            $property['alt_text'] = $image['alt_text'];
        } else {
            // Set default values if no image is found
            $property['image_url'] = 'default_image_url'; // Replace with your default image URL
            $property['alt_text'] = 'No image available';
        }
    }

    return $this->response->setJSON($properties);
}

    
    // Add methods for create, update, delete etc.
}
    

    // private function geocodeAddress($address)
    // {
    //     // Here you would use a geocoding service to convert the address to latitude and longitude
    //     $apiKey = 'AIzaSyD7TH0uJ66R6CJMlg46wlIBKj1MXmIgPqI'; // Replace with your API key
    //     $address = urlencode($address);
    //     $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$apiKey}";

    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     curl_close($ch);

    //     $response = json_decode($response, true);

    //     if ($response['status'] == 'OK') {
    //         $geometry = $response['results'][0]['geometry']['location'];
    //         return [$geometry['lat'], $geometry['lng']];
    //     }

    //     return [null, null];
    // }