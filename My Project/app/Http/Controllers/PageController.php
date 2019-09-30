<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PageController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::has('stocks')->paginate(6);
        
        $featured_products = Product::has('stocks')->where('featured', 1)->take(4)->get();

        return view('index')
                ->with('products', $products )
                ->with('featured_products', $featured_products);
    }

    //faq
    public function faq()
    {
    	return view('faq');
    }

    //contact
    public function contact()
    {
    	return view('contact');
    }
}
