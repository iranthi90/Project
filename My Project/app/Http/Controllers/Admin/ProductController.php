<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Category;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')->with('products', Product::all() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create')
                    ->with('categories', $categories);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


        $this->validate($request, [
            'name' => 'required| max: 255',
            'price' => 'required| numeric',
            'category' => 'required',
            'product_image' => 'required | image'
        ]);

        $product_slug = str_replace(" ", "-", trim(strtolower($request->name)));

        $product_image = $request->product_image;

        $product_image_name = time().$product_slug.".".$product_image->getClientOriginalExtension();

        $product_image->move('uploads/products', $product_image_name);

        $product = Product::create([
            'name' => $request->name,
            'slug' => $product_slug,
            'price' => $request->price,
            'description' => htmlentities($request->description),
            'product_image' => $product_image_name,
            'video' => $request->video,
            'featured' => $request->has('featured') //takes true or false based on clicked or not

        ]);        

        //attaching selected categories
        $product->categories()->attach($request->category);

        Session::flash('success', "Product created successfully.");

        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();;

        $categories = Category::all();

        return view('admin.products.edit')
                    ->with('product', $product)
                    ->with('categories', $categories);
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
        $this->validate($request, [
            'name' => 'required| max: 255',
            'slug' => 'required | max: 255',
            'price' => 'required| numeric',
            'category' => 'required',

        ]);

        $product = Product::find($id);

        $product_slug = str_replace(" ", "-", trim(strtolower($request->slug)));

        if($request->hasFile('product_image')){

            $product_image = $request->product_image;

            $product_image_name = time().$product_slug.".".$product_image->getClientOriginalExtension();

            $product_image->move('uploads/products', $product_image_name);

            $product->product_image = $product_image_name;

        }

        $product->name = $request->name;
        $product->slug =  $product_slug;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->featured = $request->has('featured'); // set $product->featured to true/false based on whether featured is clicked
        $product->video = $request->video;

        $product->save();

        //updating categories for this product 
        $product->categories()->sync($request->category);

        Session::flash('success', "You successfully updated the product.");

        return redirect()->route('products');
    }

    //trash the product
    public function trash($id){

        $product = Product::find($id);

        $product->delete();

        Session::flash('success', "You successfully trashed the product.");

        return redirect()->route('products');
    }

    //view trashed products
    public function viewTrashed(){

        $products = Product::onlyTrashed()->get();

        return view('admin.products.trashed')->with('products', $products);
    }

    //restore trashed product
    public function restore($id){

        $product = Product::withTrashed()->where('id', $id)->first();

        $product->restore();

        Session::flash('success', "Product restored successfully.");

        return redirect()->route('products');

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
}
