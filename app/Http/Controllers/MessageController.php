<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showAll()
    {
        $messages = Message::all()->sortByDesc('created_at');

        return view('messages', ['messages' => $messages]);
    }

    public function create(Request $request)
    {   
        //TO MAKE IT REQUIRED
        $request->validate([
            'username'=>'required | min:4',
            'comment'=>'required | min:2',
              ]);

        // we create a new Message-Object
        $message = new Message();
        // we set the properties title and content
        // with the values that we got in the post-request
        $message->username = $request->username;
        $message->comment = $request->comment;

        // we save the new Message-Object in the messages
        // table in our database
        $message->save();

        // at the end we make a redirect to the url /messages
        return redirect('/share');
    }

    // public function details($id)
    // {
    //     $message = Message::findOrFail($id);
    //     return view('messageDetails', ['message' => $message]);
    // }

    
    public function delete($id)
    {
        $result = Message::findOrFail($id)->delete();

        return redirect('/share');
    }

    public function editData($id)
    {
        $message= Message ::find($id);
        return view('messageDetails',['message' => $message]);
    }

    public function update(Request $request, $id) {
 
        $request->validate([
            'username' => 'required',
            'comment' => 'required'
        ]);
  
        $data = Message::findOrFail($id);
        $data->username = $request->username;
        $data->comment = $request->comment;
        $data->save();
  
        return redirect('/share');
   }
}
