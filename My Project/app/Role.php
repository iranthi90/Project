<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	//public $table = "role";

    //get users for the role
    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
