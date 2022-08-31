<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showAll()
    {
    //   FOR PAGINATE THE SITE  $messages = Message::paginate(4);

    // return view('products.index-paging')->with('messages', $messages);

    // TODO: Query that lists all messages into $messages_all
    if (Message::all()->sortByDesc('created_at')->count() >= 10) {
        $messages = Message::all()->random(10);

    } else {
        $messages = Message::all()->sortByDesc('created_at');
    }

    // TODO: Query that lists all wishes.

    // TODO: trace $messages_wish with dd();

    return view('people_dreams', ['messages' => $messages]);

    }


    public function showOne()
    {
    
        $messages = Message::orderBy('created_at','asc')->get();
    //  $messages=Message::all()->first();
    //  all()->sortByDesc('created_at')->first();

    return view('dream_download', ['messages' => $messages]);


    }

    public function create(Request $request) {
 
        $request->validate([
            'username'=>'required | min:2',
            'comment'=>'required | min:3',
            'wish'=>'required | min:3',
              ]);
             

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
        return redirect('/card/{id}');        
    }
 

    public function resultDetails($id) {

        $messages= Message ::find($id);
        return view('dream_download', ['message' => $messages]);
    }

    public function cardCreated (){
        $messages = Message::latest('id')->first();
        return view('card_created',['message' => $messages] );
    }


}
