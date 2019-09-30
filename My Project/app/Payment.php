<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'merchant_id','order_id',' payment_id', 'payhere_amount','payhere_currency', 'status_code','md5sig',' custom_1',' custom_2','method','status_message',' card_holder_name',' card_no','card_expiry'
    ];

    //1-M with Order
    public function order(){
        return $this->hasMany('App\Order');
    }


}
