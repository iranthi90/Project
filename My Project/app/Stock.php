<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
    	'product_id', 'supplier_id', 'init_qty', 'current_qty', 'reorder_level'
    ]; 

    
    //M-1 relationship
    public function product(){
    	return $this->belongsTo('App\Product')->withTrashed();
    }

    //M-1 relationship with supplier
    public function supplier(){
    	return $this->belongsTo('App\Supplier');
    }

  
}
