<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $total_message = DB::table('messages')->count();
        $total_employee = DB::table('employees')->where('deleted_at','=',NULL)->count();
        $total_order = DB::table('orders')->count();
        $total_product = DB::table('products')->count();

        return view('home' , [
            'totalemployee' => $total_employee,
            'totalmessage' => $total_message,
            'totalorder' => $total_order,
            'totalproduct' => $total_product,
        ]);
    
    }
}
