<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
use Session;

class NotifyController extends Controller
{
    public function index(){

        if(Cart::content()->count() == 0){
            Session::flash('info', "Your cart is empty. Please add products to your cart to continue.");
            return redirect()->back();
        }

        return view('notify');
    }
}
