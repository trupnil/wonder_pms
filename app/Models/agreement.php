<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class agreement extends Model
{
    //
    protected $table = "agreements";

    protected $fillable = [
    	
    	"id",
    	"agreement_no",
    	"user_id",
    	"tenant_id",
    	"unit_id",
    	"unit_type_id",
    	"property_id",
    	"property_type_id",
    	"tenant_name",
    	"resident_card",
    	"passport",
    	"telephone",
    	"mobile",
        "tenant_work",
    	"sponser_name",
    	"tenant_cr",
    	"unit_type_name",
    	"unit_name",
    	"agreement_start",
    	"agreement_end",
    	"document_attach",
    	"monthly_rent",
    	"payment_type",
    	"status",
        "period_of"

    ];

    public static function getAllAgreementWithDecending()
    {
    	return agreement::orderBy('id', 'desc')->get();
    }

   public function hasOneUnitType()
    {
        return $this->hasOne(unit_type::class, 'id', 'unit_type_id');   
    }

    public function hasOneUnit()
    {
        return $this->hasOne(unit::class, 'id', 'unit_id');   
    }
    public function hasOneProperty()
    {
        return $this->hasOne(property::class, 'id', 'property_id'); 
    }
    public function hasOnePropertType()
    {
        return $this->hasOne(property_type::class, 'id', 'property_type_id');
    }

    public function hasOneTenant()
    {
        return $this->hasOne(tenant::class, 'id', 'tenant_id');   
    }



}
