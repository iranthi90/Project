<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Stock;
use App\Product;
use App\Supplier;

use Session;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::with('product', 'supplier')->get();

        return view('admin.stocks.index')
            ->with('stocks', $stocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();

        return view('admin.stocks.create')
                    ->with('products', $products)
                    ->with('suppliers', $suppliers);
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
            'product_id.required' => 'Please select a product to continue.',
            'supplier_id.required' => 'Please select a supplier to continue.',
            'init_qty.required' => 'Initial quantity field cannot be empty.',
            'reorder_level.required' => 'Ee-order level field cannot be empty.',
        ];

        $this->validate($request, [
            'product_id' => 'required',
            'supplier_id' => 'required',
            'init_qty' => 'required',
            'reorder_level' => 'required',
        ], $messages);

        $stock = Stock::create([
            'product_id' => $request->product_id,
            'supplier_id' => $request->supplier_id,
            'init_qty' => $request->init_qty,
            'current_qty' => $request->init_qty,// making the current quantity as same as initial quantity at the stock create
            'reorder_level' => $request->reorder_level,
        ]);

        $stock->save();

        Session::flash('success', "Stock created successfully.");

        return redirect()->route('stocks');

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
        $stock = Stock::find($id);

        $products = Product::all();
        $suppliers = Supplier::all();

        return view('admin.stocks.edit')
                ->with('stock', $stock)
                ->with('products', $products)
                ->with('suppliers', $suppliers);
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
            'product_id.required' => 'Please select a product to continue.',
            'supplier_id.required' => 'Please select a supplier to continue.',
            'init_qty.required' => 'Initial quantity field cannot be empty.',
            'reorder_level.required' => 'Ee-order level field cannot be empty.',
        ];

        $this->validate($request, [
            'product_id' => 'required',
            'supplier_id' => 'required',
            'init_qty' => 'required',
            'reorder_level' => 'required',
        ], $messages);

        $stock = Stock::find($id);

        $stock->product_id = $request->product_id;
        $stock->supplier_id = $request->supplier_id;
        $stock->init_qty = $request->init_qty;
        $stock->reorder_level = $request->reorder_level;

        $stock->save();

        Session::flash('success', "Stock updated successfully.");

        return redirect()->route('stocks');

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
