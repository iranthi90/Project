<?php


namespace App\Http\Controllers\Admin;


use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Mail\OrderShipped;
use App\Mail\OrderDelivered;
use Illuminate\Support\Facades\Mail;

use Session;
use App\Setting;


class OrderController
{
    public function index()
    {
//        $orders = DB::table('order')
//            ->Select('users.name as username','users.id as userId',
//                'orders.id','orders.status','orders.total','orders.created_at')
//            ->leftJoin('users', 'users.id', 'orders.user_id')
//            ->orderBy('orders.id','DESC')
//            ->get();

        $orders = Order::with('user')->orderBy('id', 'DESC')->get();

        return view('admin.order.index')->with('orders', $orders);
    }

    public function destroy($id)
    {
        if (is_array($id))
        {
            Order::destroy($id);
        }
        else
        {
            Order::findOrFail($id)->delete();
        }
        // redirect or whatever...
    }


    public function show($id){
//            $order = Order::find($id)->products;

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

        return view('admin.order.show')
            ->with('order',$order)
            ->with('subtotal', $subtotal)
            ->with('order_details', $order_details)
            ->with('settings', $settings);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $order = Order::find($id);

        $order->status = $request->status;

        $order->save();


        if($request->status == 'shipped'){
            Mail::to($order->user->email)->send(new OrderShipped($order));
        }

        if($request->status == 'delivered'){
            Mail::to($order->user->email)->send(new OrderDelivered($order));
        }


        Session::flash('success', "Order status updated successfully.");

        return redirect()->route('order');
    }


}