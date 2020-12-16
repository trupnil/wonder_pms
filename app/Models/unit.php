<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\property_type;
use App\Models\property;
use App\Models\unit_type;

class unit extends Model
{
    //
    protected $table = 'unit';
    protected $fillable=[
    	'id',
    	'unit_type_id',
    	'property_type_id',
    	'property_id',
    	'unit_name',
    	'unit_localname',
    	'description',
    	'remark',
    	'photos',
    	'status',
    	'user_id',
        'block_no',
    	'floor_no',
    ];

    public function hasOneUnitType()
    {
    	return $this->hasOne(unit_type::class, 'id', 'unit_type_id');	
    }
    public function hasOneProperty()
    {
    	return $this->hasOne(property::class, 'id', 'property_id');	
    }
    public function hasOnePropertType()
    {
    		return $this->hasOne(property_type::class, 'id', 'property_type_id');
    }


}
