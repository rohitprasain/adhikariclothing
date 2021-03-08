<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addproduct');
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
        

        $request->validate([
            'productid' => 'required | integer ',
            'productname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'category'  => 'required | string | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'size'  => 'required | string | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'price' => 'required | integer ',
            'stockquantity' => 'required | integer ',
            'imglocation'  => 'required',

        ]);

        $product = new Product();

        $product->productid  = $request->productid;
        $product->productname  = $request->productname;
        $product->category  = $request->category;
        $product->size  = $request->size;
        $product->price  = $request->price;
        $product->stockquantity  = $request->stockquantity;
        $product->imglocation  = $request->imglocation;

        $product->save();

        return redirect('/home')->with('msg','Product Added Successfully');
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
}
