<?php namespace App\Controllers;

// use App\Models\AgencyModel;

class Allproperties extends BaseController
{
    public function index()
    {
        // $model = new AgencyModel();
        // $data['agencies'] = $model->findAll();
        
        echo view('map/all_properties');
    }

    // Add more methods for create, update, delete etc.
}
