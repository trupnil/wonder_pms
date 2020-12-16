<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class unit_type extends Model
{
    //
    protected $table = 'unit_type';
    protected $fillable=[
    	'id',
    	'unit_type_name',
    	'unit_type_localname',
    	 'user_id',
     ];

     public static function getAllUnitTypes()
     {
     	return $getAllUnitTypes = \App\Models\unit_type::orderBy('id', 'desc')->get();
     }
}
