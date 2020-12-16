<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tenant extends Model
{
    //
   
    protected $table = "tenant";
    protected $fillable = [
    	'id',
    	'tenant_name',
    	'tenant_localname',
    	'resident_card',
    	'driving_lic',
    	'passport',
    	'mobile',
    	'telephone',
    	'email',
    	'alternate_contact',
    	'country',
    	'state',
    	'provine',
    	'city',
    	'area',
    	'landmark',
    	'other_details',
    	'tenant_spouse',
    	'blood_group',
    	'tenant_work',
    	'photo',
    	'birthdate',
    	'tenant_cr',
    	'sponser_name',
    	'status',
    	];

    	public static  function getAllTenantWithDecending()
    	{
    	  return tenant::orderBy('id', 'desc')->get();
    	}

}
