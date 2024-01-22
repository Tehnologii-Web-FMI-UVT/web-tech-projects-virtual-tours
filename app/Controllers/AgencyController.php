<?php namespace App\Controllers;

 use App\Models\AgencyModel;
 use App\Models\PropertyModel;
 class AgencyController extends BaseController
 {
     public function index()
     {
         $session = session();
         $userId = $session->get('logged_in');
         $agencyId = $session->get('agency_id'); // Assuming this is set when the user logs in
 
         $agencyModel = new AgencyModel();
         
         // Fetch only the agency's specific data
         $agencyData = $agencyModel->where('id', $agencyId)->first();
 
         if (!$agencyData) {
             // Handle the case where no agency data is found
             return redirect()->to('/setup-agency');
         }
 
         // Pass the data to the view
         return view('agency/dashboard', ['agency' => $agencyData]);
     }
 
     // ... other methods that perform actions specific to the agency
 }