<?php

namespace App\Http\Controllers;

use App\Order;
use App\Setting;
use Illuminate\Http\Request;

use Cart;
use Session;
use App\Payment;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ReturnController extends Controller
{
    public function index(){

        if(Cart::content()->count() == 0){
            Session::flash('info', "Your cart is empty. Please add products to your cart to continue.");
            return redirect()->back();
        }

        //take the entry from the payments table where order_id= 'order_user_id' (user_id is a number here)
        // - take the last record from the table
        //check the status_code of the record

        $last_order = Order::where([
            ['user_id', '=', Auth::user()->id],
            ['payment_status', '=', 'incomplete'],
            ['status', '=', 'pending'],
        ])->orderBy('id', 'desc')->first();

           $last_payment = Payment::where([
               ['order_id', '=' , $last_order->id]
           ])->orderBy('id', 'desc')->first();

        //if status_code == 'success'

        //take the order record for the above order_id from the orders table
        // update the order_status of the record to 'paid'
        // delete old records before that record which has order_status as 'incomplete'

       $status_code = $last_payment->status_code;
        // $status_code = 'success';

        if($status_code == 'success'){

            $update_order = Order::find($last_order->id);
            $update_order->payment_status = 'paid';
            $update_order->status = 'pending';

            //update order_total, cur_shipping, cur_tax
            $update_order->order_total = Cart::total();

            $settings = Setting::find(1);

            $update_order->cur_shipping = $settings->flat_ship;
            $update_order->cur_tax = $settings->tax;

            $update_order->save();

            //delete old incomplete orders
            $orders = Order::where([
                ['user_id', '=', Auth::user()->id],
                ['payment_status', '=', 'incomplete'],
                ['status', '=', 'pending'],
            ])->get();

            foreach ($orders as $order){
                Order::destroy($order->id);
            }


            //update order_products table and other associate tables
            foreach (Cart::content() as $product){
                $last_order_by_client = Order::find($last_order->id);

                $last_order_by_client->products()->attach($product->id);

                //find and update on order_product

                $settings = Setting::find(1);
                $commission = $product->price * $product->qty * $settings->commis;


                DB::table('order_product')
                    ->where('order_id', $last_order->id)
                    ->where('product_id', $product->id)
                    ->update(
                        [
                            'qty' => $product->qty,
                            'commission' => $commission
                        ]
                    );
            }


            //empty the cart
            Cart::destroy();
        }



        //send the status code to the view

        return view('return')
        		->with('status_code', $status_code);
    }
}
