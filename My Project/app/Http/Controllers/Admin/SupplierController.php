<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Supplier;
use App\Product;

use Session;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();

        return view('admin.suppliers.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('admin.suppliers.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        

        $messages = [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
        ];

        $this->validate($request, [
            'company_name' => 'required| max: 255',
            'fname' => 'required| max: 255',
            'lname' => 'required| max: 255',
            'email' => 'required| email',
        ], $messages);

        $supplier_image_name = "";

        if($request->hasFile('image')){

            $supplier_image = $request->image;

            $supplier_image_name = time().$request->company_name.".".$supplier_image->getClientOriginalExtension();

            $supplier_image->move('uploads/suppliers', $supplier_image_name);
        }


        $supplier =  Supplier::create([
            'company_name' => $request->company_name,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'address' => $request->address,
            'phone_1' => $request->phone_1,
            'phone_2' => $request->phone_2,
            'image' => $supplier_image_name,
            'website' => $request->website
        ]);

        //attaching products to this supplier
        $supplier->products()->attach($request->products);

        Session::flash('success', "Supplier created successfully.");

        return redirect()->route('suppliers');
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
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        $products = Product::all();

        return view('admin.suppliers.edit')
                    ->with('supplier', $supplier)
                    ->with('products', $products);
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
        $messages = [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
        ];

        $this->validate($request, [
            'company_name' => 'required| max: 255',
            'fname' => 'required| max: 255',
            'lname' => 'required| max: 255',
            'email' => 'required| email',
        ], $messages);

        $supplier = Supplier::find($id);

        $supplier_image_name = "";

        if($request->hasFile('image')){

            $supplier_image = $request->image;

            $supplier_image_name = time().$request->company_name.".".$supplier_image->getClientOriginalExtension();

            $supplier_image->move('uploads/suppliers', $supplier_image_name);

            $supplier->image = $supplier_image_name;
        }

        $supplier->company_name = $request->company_name;
        $supplier->fname = $request->fname;
        $supplier->lname = $request->lname;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->phone_1 = $request->phone_1;
        $supplier->phone_2 = $request->phone_2;
        $supplier->website = $request->website;

        $supplier->save();

        //updating products to supplier
        $supplier->products()->sync($request->products);

        Session::flash('success', "Supplier updated successfully.");

        return redirect()->route('suppliers');

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
