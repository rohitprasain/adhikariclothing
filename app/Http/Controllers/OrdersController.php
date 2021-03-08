<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrdersController extends Controller
{

    public function allorder()
    {
        $all_orders = Order::all();

        return view('allorders', [
            'all_orders' => $all_orders,

        ]);
    }
    public function orderdetails($id)
    {
        $orderdetail = Order::findOrFail($id);

        return view('allorderdetail', [
            'orderdetail' => $orderdetail,

        ]);
    }


    public function storeorder(Request $request, $productid, $productname, $size, $price)
    {
        $request->validate([
            'firstname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lastname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'contact' => ' required | integer |digits:10 ',
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

        return redirect('/welcomestore')->with('msg', 'Thanks for order !!! We will contact soon');
    }

    public function destroy($id)
    {

        $del_order = Order::findOrFail($id);
        $del_order->delete();

        return redirect('/allorders')->with('msg', 'Order Deleted Successfully');
    }
}
