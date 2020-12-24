<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    //

    protected $table = 'account_group';
    protected $fillable = [

    		'account_group_name',
    		'account_group_code'
    ];

    public static function getAllAccountGroups()
    {
    	return AccountGroup::orderBy('id', 'desc')->get();
    }

}
