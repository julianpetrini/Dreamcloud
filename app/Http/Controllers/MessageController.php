<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showAll()
    {
        $messages = Message::all()->sortByDesc('created_at');
        

        return view('share_your_wish', ['messages' => $messages]);
    }

    public function create(Request $request) {
 
        // we create a new Message-Object
        $message = new Message();
        // we set the properties title and content
        // with the values that we got in the post-request
        $message->username = $request->username;
        $message->comment = $request->comment;
        $message->wish = $request->wish;
   
        // we save the new Message-Object in the messages
        // table in our database
        $message->save();
   
        // at the end we make a redirect to the url /messages
        return redirect('/share');        
    }
 

}
