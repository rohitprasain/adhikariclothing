<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allorder()
    {
        $all_orders = Order::all();

        return view('allorders' ,[
            'all_orders' => $all_orders,

        ]);
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
    public function storeorder(Request $request , $productid , $productname , $size , $price)
    {
        $request->validate([
            'firstname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lastname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'contact' => 'required | integer',
            'quantity' => 'required | integer',
        ]);

        $storeorder = new Order();

        $storeorder->productid = $productid;
        $storeorder->productname = $productname;
        $storeorder->size = $size;
        $storeorder->price = $price;

        $storeorder->firstname = $request->firstname;
        $storeorder->lastname = $request->lastname;
        $storeorder->contact = $request->contact;
        $storeorder->quantity = $request->quantity;

        $storeorder->save();

        return redirect('/welcomestore')->with('msg' ,'Thanks for order!!!We will contact soon');
        
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
        
        $del_order = Order::findOrFail($id);
        $del_order->delete();

        return redirect('/home')->with('msg','Order Deleted Successfully');
    }
}
