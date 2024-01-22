<?php 
namespace App\Controllers;

use App\Models\AgencyModel;
use App\Models\UserModel;
use CodeIgniter\Session\Session;


class SetupAgencyController extends BaseController
{
    protected $helpers = []; // any helpers you need
    protected $userModel;


    public function index()
{
    $this->userModel = new UserModel();
    $session = session();
    $userId = $session->get('logged_in');

    // Fetch user details from the database
    $userEntity = $this->userModel->find($userId);

    // If the entity is not found, you might want to handle this case as well.
    if (!$userEntity) {
        // Handle the case where the user is not found
        return redirect()->to('/login'); // Redirect to login or a proper page.
    }
    echo $userEntity->has_setup_agency;
    // Only display if the user hasn't set up their agency yet
    if ((int)$userEntity->has_setup_agency === 1) {
        return redirect()->to('/agency-main');
    }
    
    return view('agency/setup_agency');

    // Load the view for setting up the agency
}

    

    public function submit()
    {
        helper(['form', 'url']);
        $session = session();

        // Instantiate the models
        $agencyModel = new AgencyModel();
        $userModel = new UserModel();

        // Collect agency data from POST and sanitize it
        $agencyData = [
            'agencyName'              => $this->request->getVar('agencyName', FILTER_SANITIZE_STRING),
            'description'              => $this->request->getVar('description', FILTER_SANITIZE_STRING),
            'phone_number'             => $this->request->getVar('phone_number', FILTER_SANITIZE_STRING),
            'email'                    => $this->request->getVar('email', FILTER_SANITIZE_EMAIL),
            'website_url'              => $this->request->getVar('website_url', FILTER_SANITIZE_URL),
            'active_properties_listed' => $this->request->getVar('active_properties_listed', FILTER_SANITIZE_NUMBER_INT),
            'total_properties_listed'  => $this->request->getVar('total_properties_listed', FILTER_SANITIZE_NUMBER_INT),
            'total_properties_sold'    => $this->request->getVar('total_properties_sold', FILTER_SANITIZE_NUMBER_INT),
            'number_of_agents'         => $this->request->getVar('number_of_agents', FILTER_SANITIZE_NUMBER_INT),
            'virtual_tours_created'    => $this->request->getVar('virtual_tours_created', FILTER_SANITIZE_NUMBER_INT),
            'address'                  => $this->request->getVar('address', FILTER_SANITIZE_STRING),
            'total_properties_available'=> $this->request->getVar('total_properties_available', FILTER_SANITIZE_NUMBER_INT),
            // 'logo'                     => $this->request->getVar('logo', FILTER_SANITIZE_STRING),
        ];
    
        // Validate the data
        // if (!$agencyModel->validate($agencyData)) {
        //     // Validation failed
        //     return redirect()->back()->with('errors', $agencyModel->errors())->withInput();
        // }
    
        $db = db_connect();

        $db->transStart();
        $agencyModel->insert($agencyData);
        $agencyId = $agencyModel->getInsertID(); 


        $userId = $session->get('logged_in');

        if (!empty($userId)) {
            // Ensure there is a condition for the update

            // Now use the user ID as the condition for the update operation
            $userModel->update($userId, ['has_setup_agency' => 1, 'agency_id' => $agencyId]);
            
        } else {
            // Handle errors
            return redirect()->back()->with('errors', $agencyModel->errors());
        }
        
        $db->transComplete();
    
        if ($db->transStatus() === false) {
            // Handle transaction failure
            // Possibly log this error or notify someone that it occurred
            session()->setFlashdata('error', 'Transaction failed.');
            return redirect()->back();
        } else {
            // Success, redirect to dashboard or appropriate page
            session()->setFlashdata('success', 'Agency successfully created.');
            return redirect()->to('/agency-main');
        }
    }
    
}

?>