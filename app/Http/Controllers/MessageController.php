<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showAll()
    {
        $messages = Message::all()->sortByDesc('created_at');
        // $messages = Message::all()->random(5); TO SHOW ONLY RANDOM 5

        return view('people_dreams', ['messages' => $messages]);
    }

    // public function showAll1()
    // {
    //     $messages = Message::all()->sortByDesc('created_at');
        

    //     return view('the_why', ['messages' => $messages]);
    // }

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
        return redirect('/dreams');        
    }
 
    // public function showMessage()
    // {
    //     $messages = Message::all()->sortByDesc('created_at');
    //     return view('people_dreams',['messages' => $messages]);
    // }


}
