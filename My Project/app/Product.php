<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    
    use SoftDeletes;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'price', 'qty', 'description', 'product_image','video','featured'
    ];


    // adding new timestamp
    protected $dates = ['deleted_at'];


    //total_qty
    protected $appends = ['total_qty'];


    //getting categories
    public function categories(){
    	return $this->belongsToMany('App\Category');
    }

    //getting suppliers
    public function suppliers(){
        return $this->belongsToMany('App\Supplier');
    }

    //1-M with stock
    public function stocks(){
        return $this->hasMany('App\Stock');
    }

    //getting total product quantity for this stock
    public function getTotalQtyAttribute(){
        $qty = $this->stocks()->where('product_id', '=', $this->id)->sum('current_qty');
        return $qty;
    }

    public function orders(){
        return $this->belongsToMany('App\Order');
    }

    //review 1-M
    public function reviews(){
        return $this->hasMany('App\Review');
    }

}
