<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\property_type;

class property extends Model
{
    protected $fillable=[
    	'id',
    	'property_type_id',
    	'property_name',
    	'property_localname',
    	'property_no',
    	'way_no',
    	'street_no',
    	'landmark',
    	'area',
    	'city',
    	'country',
    	'photos',
    	'status',
    	'user_id',
     ];

     public static  function getAllPropertiesType()
     {
 		return $getAllPropertiesType = property_type::get();  
 	 }

 	 public function allPropertiesWithTypes(){

     return $this->hasOne(property_type::class, 'id', 'property_type_id');

    }

    public static  function getAllProperties()
     {
        return $getAllProperties = property::get();  
     }
}
