<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = "payment";
    protected $fillable = [
        
        "voucher_no",
    	"voucher_date",
    	"agreement_no",
        "tenant_name",
    	"payment_date",
    	"month",
    	"payment_type",
    	"cheque_no",
    	"cheque_date",
    	"rent_amount",
    	"paid_amount",
    	"balance_amount",
    	"status",

    ];

     public static function getAllPaymentRecord()
    {
        return Payment::orderBy('tenant_name', 'ASC')->get();
    }

    



}
