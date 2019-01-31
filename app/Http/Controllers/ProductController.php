<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexapi()
    {
        return ProductModel::all();
    }
    public function index()
    {   
        return view('products');
    }
    public function index_insert()
    {   
        return view('product_insert');
    }
    public function index_update($id)
    {   
        $product = ProductModel::find($id);
        return view('product_update',compact('product'));
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
        $product = new ProductModel;
        $product->customer = $request->input('customer');
        $product->phone = $request->input('phone');
        $product->product = $request->input('product');
        $product->amount = $request->input('amount');
        $product->price = $request->input('price');
        $product->delivery_staff = $request->input('delivery_staff');
        if($request->input('approve') == 1){
            $product->approve = 'Y';
        }
        else{
            $product->approve = 'N';
        }
        $product->save();

        return  redirect()->route('product');
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
        
        /*$id = $request->$id;
        dd($id);
        $customer = $request->customer;*/

        $product = ProductModel::find($id);
        $product->customer = $request->input('customer');
        $product->phone = $request->input('phone');
        $product->product = $request->input('product');
        $product->amount = $request->input('amount');
        $product->price = $request->input('price');
        $product->delivery_staff = $request->input('delivery_staff');
        $product->save();

        return  redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductModel::destroy($id);
        return view('products');
    }
}
