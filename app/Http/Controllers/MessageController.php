<?php

namespace App\Http\Controllers;

use App\Models\Message;


class MessageController extends Controller
{


    public function allmessage()
    {
        $messages = Message::orderby('created_at','desc')->get();

        return view('allmessages' , [
            'messages' => $messages,
        ]);
    }
   
    public function destroy($id)
    {
        $del_message = Message::findOrFail($id);
        $del_message->delete();

        return redirect('/home')->with('msg','Message Deleted Successfully');
    }
}
