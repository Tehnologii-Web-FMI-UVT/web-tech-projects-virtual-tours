<?php namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'agency_id', 'title', 'description', 'address', 'price',
        'virtual_tour_id', 'details', 'latitude','longitude','virtual_tour_url','lot_mp',
        'rooms','type','bathrooms','garages','interior_size','construction_year','view_count'
    ];

    protected $returnType = 'array';

    // Add any necessary validation rules
    protected $validationRules = [
        'title' => 'required|string|max_length[255]',
        'description' => 'required|string',
        // add other rules as needed
    ];
    public function getPropertiesByAgencyId(int $agencyId)
    {
        return $this->where('agency_id', $agencyId)->findAll();
    }
    public function incrementViewCount($id)
    {
        $this->set('view_count', 'view_count+1', FALSE);
        $this->where('id', $id);
        $this->update();
    }
    public function getHotProperties() {
        return $this->select('id, title, interior_size, view_count, address, rooms, type, bathrooms, garages')
                    ->orderBy('view_count', 'DESC')
                    ->limit(3)
                    ->findAll();
    }
    
    
}
