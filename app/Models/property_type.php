<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\property;
class property_type extends Model
{
    //
    protected $fillable=[
    	'id',
    	'property_type_name',
    	'property_type_localname',
    	'property_code',
    	'user_id',
     ];

     public function propetiesWithType()
{
    return $this->hasMany(property::class);
}
}
