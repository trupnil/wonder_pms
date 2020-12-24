<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $table = "accounts";
    protected $fillable = [

    	"account_name",
    	"account_group_id",

    ];

    public function hasOneAccountGroup()
    {
        return $this->hasOne(AccountGroup::class, 'id', 'account_group_id');   
    } 
}
