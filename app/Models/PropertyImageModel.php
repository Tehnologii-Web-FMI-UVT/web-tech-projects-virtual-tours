<?php namespace App\Models;

use CodeIgniter\Model;

class PropertyImageModel extends Model
{
    protected $table = 'property_images';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['property_id', 'image_url', 'alt_text'];

    protected $returnType = 'array';

    public function getImagesByPropertyId(int $propertyId)
    {
        return $this->where('property_id', $propertyId)->findAll();
    }
}

?>