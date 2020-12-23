<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    //
    public static function getAllTaxes()
    {
    	return Tax::orderBy('id', 'desc')->get();
    }
}
