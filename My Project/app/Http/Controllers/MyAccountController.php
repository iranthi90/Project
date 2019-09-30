<?php
/**
 * Created by PhpStorm.
 * User: IraNthi
 * Date: 7/6/2019
 * Time: 3:49 PM
 */

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MyAccountController
{
    public function index(){

        return view('my_account.index');
    }

    public function orders(){

        $myorders = DB::table('orders')
            ->where('user_id', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('my_account.orders')->with('orders', $myorders);

    }

    public function show_order($id){
        $order = DB::table('order_product')
            ->leftJoin('products', 'products.id', '=', 'order_product.product_id')
            ->where('order_id', $id)
            ->get();

        $order_details =  Order::find($id);

        $subtotal = 0;
        foreach ($order as $prod){
            $subtotal += $prod->price * $prod->qty;
        }
        $settings = Setting::find(1);

        return view('my_account.show_order')
            ->with('order',$order)
            ->with('subtotal', $subtotal)
            ->with('order_details', $order_details)
        ->with('settings', $settings);


    }


}