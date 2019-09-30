<?php
/**
 * Created by PhpStorm.
 * User: IraNthi
 * Date: 5/28/2019
 * Time: 10:39 AM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Session;


class SettingController
{
    public function settings()
    {
        $settings = Setting::find(1);


        return view('admin.settings')->with('settings', $settings);
    }



    public function change(Request $request){


        $settings = Setting::find(1);


        $settings->email = $request->email;
        $settings->address =$request->address ;
        $settings->telephone = $request->telephone;
        $settings->fax = $request->fax;
        $settings->twit = $request->twit;
        $settings->youtube = $request->youtube;
        $settings->commis = $request->commis;
        $settings->tax = $request->tax;
        $settings->flat_ship= $request->flat_ship;

        $settings->save();



        Session::flash('success', "Data Updated, Success!.");

        return redirect()->route('admin.home');
    }
}