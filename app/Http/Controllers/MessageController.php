<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Http\Requests\MessageUpdateRequest;
use App\Http\Requests\NewRequest;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function delete($id){
        $message = Message::findOrFail($id);

        $message->delete();
        return redirect()->route('home')->with('new_message',__("language.deleted"));
    }

    public function store(MessageRequest $req){
        Message::create([
            'id' => $req->id,
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ]);

        return redirect()->route('home')->with('new_message',__("language.created"));
    }

    public function new(NewRequest $req){
        Message::create([
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ]);

        return redirect()->route('welcome');
    }

    public function update($id){
        $message = Message::findOrFail($id);

        return view('messages.update' , ['message'=>$message]);
    }

    public function save(MessageUpdateRequest $req){
        $old_id = $req->old_id;

        $message = Message::findOrFail($old_id);

        $message->update([
            'id' => $req->id,
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message_content
        ]);

        return redirect()->route('home')->with('new_message',__("language.updated"));
    }
}
