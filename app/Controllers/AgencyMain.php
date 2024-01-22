<?php namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Session\Session;
use App\Models\AgencyModel;
use App\Models\PropertyModel;
use App\Models\PropertyImageModel;


class AgencyMain extends BaseController
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

    public function index()
    {
        if($this->verify_login()){
        $session = session();
        $userId = $session->get('logged_in');

        $agencyModel = new AgencyModel();

        // Fetch only the agency's specific data using the agency ID from the session
        $agencyData = $agencyModel->getAgencyDataByID($userId);

        if (!($agencyData)) {
            // Handle the case where no agency data is found
            return redirect()->to('/setup-agency');
        }

        // Pass the data to the view
        return view('agency/agency_main', ['agency' => $agencyData]);
    }else{
        return redirect()->route('login')->with('error', lang('Auth.notEnoughPrivilege'));

    }
    }

    public function manage_properties()
    {
        if($this->verify_login()) {
            $session = session();
            $agencyId = $_SESSION['agency']['id'];
            //$session->get('agency_id'); // You need to have set this when agency logged in
    
            $propertyModel = new PropertyModel();
            $propertyImageModel = new PropertyImageModel();
            $properties = $propertyModel->where('agency_id', $agencyId)->findAll();
            
            // Fetch images for each property and append to the properties array
            foreach ($properties as $key => $property) {
                $images = $propertyImageModel->where('property_id', $property['id'])->findAll();
                // Attach the images directly to the properties array
                $properties[$key]['images'] = $images;
            }
    
            $data['properties'] = $properties;
    
            return view('agency/manage_properties', $data);
        } else {
            return redirect()->route('login')->with('error', lang('Auth.notEnoughPrivilege'));
        }
    }
    
    public function create_property()
    {
        if($this->verify_login()){
        echo view('agency/create_property');
        }else{
            return redirect()->route('login')->with('error', lang('Auth.notEnoughPrivilege'));

        }
    }
    public function verify_login(){

        $session= session();
        $userId = $session->get('logged_in');

        if (!$userId) {
            // If there's no user logged in or agency ID in session, redirect to login or setup
            return false; // Or to '/setup-agency' if you prefer
        }
        return true;

    }
    // Add more methods for create, update, delete etc.
}
