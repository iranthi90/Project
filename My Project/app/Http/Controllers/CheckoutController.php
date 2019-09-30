<?php

namespace App\Http\Controllers;

use App\Order;
use Faker\Provider\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Cart;
use Session;
use App\Setting;


class CheckoutController extends Controller

{
    public function index(Request $request){





        if(Cart::content()->count() == 0){
            Session::flash('info', "Your cart is empty. Please add products to your cart to continue.");
            return redirect()->back();
        }else{

          $order_id = null;
          if(Auth::user()){
            //insert query .
            $customer_id='customer_'.Auth::user()->id;

            $order = Order::create([
                'user_id'=>Auth::user()->id,
                'payment_status'=>'incomplete',
                'status'=>'pending'
            ]);
            $order->save();

            $order_id = $order->id;
          }
           
            $settings = Setting::find(1);



      return view('checkout')
                ->with('order_id', $order_id)
              ->with('settings', $settings);

        }



   }

}