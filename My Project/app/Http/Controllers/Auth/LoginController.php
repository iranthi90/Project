<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo()
    {
        
        // User role
        $role = Auth::user()->role->name; 
        
        // Check user role
        if($role == 'admin' || $role == 'manager' || $role == 'employee'){
            return '/administrator';
        }else{
            $last_url = str_replace(url('/'), '', url()->previous());

            //redirecting based on last url
            if($last_url == '/shop/checkout'){
                return '/shop/checkout';
            }
                        
            return '/';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
