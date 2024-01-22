<?php namespace App\Models;

use CodeIgniter\Model;

class AgencyModel extends Model
{
    protected $table = 'estate_agencies';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'agencyName', 'description', 'phone_number', 'email', 'website_url',
        'active_properties_listed', 'total_properties_listed', 'total_properties_sold',
        'number_of_agents', 'virtual_tours_created', 'address', 'total_properties_available',
        'logo'
    ];
    

    protected $returnType = 'array';

    // Add any necessary validation rules
    protected $validationRules = [];

    public function getAgencyData()
    {
        $agencyId = $_SESSION['agency']['id'];
        return $this->where('id', $agencyId)->first();
    }
    public function getAgencyDataByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
