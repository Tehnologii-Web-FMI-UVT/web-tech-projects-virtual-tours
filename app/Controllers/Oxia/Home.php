<?php namespace App\Controllers\Oxia;

use App\Controllers\BaseController;
use App\Models\PropertyModel;

class Home extends BaseController
{
    public function index()
    {
        // $model = new AgencyModel();
        // $data['agencies'] = $model->findAll();
        
        echo view('agency/agency_main');
    }

    public function manage_properties()
    {
        $session = session();
        $agencyId = $_SESSION['agency']['id'];
        //$session->get('agency_id'); // You need to have set this when agency logged in
        $propertyModel = new PropertyModel();
        $data['properties'] = $propertyModel->where('agency_id', $agencyId)->findAll();

        return view('agency/manage_properties', $data);
    }

    // Add more methods for create, update, delete etc.
}
