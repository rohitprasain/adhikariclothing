<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Product;


use Illuminate\Support\Facades\DB;


class LandingController extends Controller
{

    public function welcomehome()
    {
        return  view('welcomehome');
    }


    public function welcomestore()
    {
        $babies = DB::table('products')->where('category', 'baby')->get();
        $male = DB::table('products')->where('category', 'male')->get();
        $female = DB::table('products')->where('category', 'female')->get();

        return  view('welcomestore', [
            'babies' => $babies,
            'male' => $male,
            'female' => $female,

        ]);
    }


    public function welcomecontact()
    {
        return  view('welcomecontact');
    }


    public function storemessage(Request $request)
    {
        $request->validate([
            'firstname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lastname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'email' => 'required ',
            'email' => 'required | email',
            'description' => 'required | max:20',
        ]);

        $message = new Message();
        $message->firstname  = $request->firstname;
        $message->lastname  = $request->lastname;
        $message->email  = $request->email;
        $message->description  = $request->description;

        $message->save();

        return redirect('/');
    }
}
