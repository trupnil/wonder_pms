<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    //
    protected $fillable = [
    	'tax_name',
    	'tax_percentage'
   	 ];
    public static function getAllTaxes()
    {
    	return Tax::orderBy('id', 'desc')->get();
    }
}
