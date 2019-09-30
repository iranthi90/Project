<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'company_name', 'fname', 'lname', 'email', 'address', 'phone_1', 'phone_2', 'image', 'website'
    ];

    //getting products
    public function products(){
    	return $this->belongsToMany('App\Product');
    }

    //1-M with stocks
    public function stocks(){
        return $this->hasMany('App\Stock');
    }
}
