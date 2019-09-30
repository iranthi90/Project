<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
    	'product_id', 'user_id', 'review', 'rating'
    ]; 

    
    //M-1 relationship
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
