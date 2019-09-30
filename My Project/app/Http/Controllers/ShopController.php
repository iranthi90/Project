<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Cart;
use Session;
use App\Order;

use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::has('stocks')->paginate(12);

        $featured_products = Product::has('stocks')->where('featured', 1)->take(2)->get();
        
        return view('shop')
                ->with('products', $products )
                ->with('featured_products', $featured_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();

        $product_stocks = Product::find($product->id)->stocks;  

        $product_reviews = DB::select(
            "SELECT re.id, re.review, re.rating, DATE(re.created_at) as reviewed_at, p.name, u.name FROM `reviews` re 
                LEFT JOIN products p ON p.id = re.product_id
                LEFT JOIN users u ON u.id = re.user_id
                WHERE re.product_id = $product->id"
        );
  

        return view('product_details')
                ->with('product', $product)
                ->with('product_reviews', $product_reviews);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //cart page
    public function cart()
    {
        return view('cart');
    }


    //add to cart
    public function addToCart(){

        $product = Product::find(request()->prod_id);

        $cartItem = Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => request()->qty
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');


        Session::flash('success', "Product added to cart.");

        return redirect()->back();
    }

    //delete item from cart
    public function cartDelete($id){

        Cart::remove($id);

        return redirect()->back();
    }

    //cart - decrement item quantity
    public function cartDecr($id, $qty){

        Cart::update($id, $qty -1);

        return redirect()->back();
    }

     //cart - increment item quantity
    public function cartIncr($id, $qty){

        Cart::update($id, $qty +1);

        return redirect()->back();
    }

    //quick add to cart
    public function quickAdd($id){
        $product = Product::find($id);

        $cartItem = Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 1
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');


        Session::flash('success', "Product added to cart.");

        return redirect()->back();
    }



}
