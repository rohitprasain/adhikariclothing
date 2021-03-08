<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
   
    public function index()
    {
        return view('addproduct');
    }

    public function store(Request $request)
    {


        $request->validate([
            'productname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'category'  => 'required | string | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'size'  => 'required | string | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'price' => 'required | integer ',
            'stockquantity' => 'required | integer ',
            'imglocation'  => 'required',

        ]);

        $product = new Product();

        $product->productname  = $request->productname;
        $product->category  = $request->category;
        $product->size  = $request->size;
        $product->price  = $request->price;
        $product->stockquantity  = $request->stockquantity;
        $product->imglocation  = $request->imglocation;

        $product->save();

        return redirect('/home')->with('msg', 'Product Added Successfully');
    }

    public function showproductdetail($id)
    {
        // dd($id);
        $productdetails = Product::findOrFail($id);
        // dd($productdetails);
        return view('showproductdetail', [
            "productdetails" => $productdetails,
        ]);
    }

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
