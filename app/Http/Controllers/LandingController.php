<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcomehome()
    {
        return  view('welcomehome');
    }
    
    public function welcomestore()
    {
        return  view('welcomestore');
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
