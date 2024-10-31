<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MessageController extends Controller
{
    function showAll()
    {
        $messages = MessageResource::collection(Message::all());
        $data = [
            "msg" => "All Messages",
            "status" => "success",
            "data" => $messages
        ];

        return response()->json($data);
    }

    function show($id)
    {
        $message = Message::find($id);

        if ($message) {
            $data = [
                'msg' => 'One Record',
                'status' => 'Success',
                'data' => new MessageResource($message),
            ];

            return response()->json($data);
        } else {
            $data = [
                'msg' => 'No Such ID',
                'status' => 'Fail',
                'data' => Null,
            ];

            return response()->json($data);
        }
    }

    function delete(Request $req)
    {
        $id = $req->id;
        $message = Message::find($id);

        if ($message) {
            $message->delete();
            $data = [
                'msg' => 'Deleted Successfully',
                'status' => 'Success',
                'data' => Null,
            ];

            return response()->json($data);
        } else {
            $data = [
                'msg' => 'No Such ID',
                'status' => 'Fail',
                'data' => Null,
            ];

            return response()->json($data);
        }
    }

    function store(Request $req)
    {

        $validation = validator($req->all(), [
            'id' => 'unique:messages|max:11',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:500'
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Creation Failed',
                'status' => 'failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        $newMessage = Message::create([
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ]);

        $data = [
            'msg' => 'Created Successfully',
            'status' => 'Success',
            'data' => new MessageResource($newMessage)
        ];

        return response()->json($data);
    }

    function update(Request $req)
    {
        $old_id = $req->old_id;
        $message = Message::find($old_id);

        $validation = validator($req->all(), [
            'id' => [
                'required',
                Rule::unique('messages')->ignore($old_id),
                'max:11'
            ],
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message_content' => 'required|max:500'
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Validation Failed',
                'status' => 'Failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        if ($message) {
            $message->update([
                'id' => $req->id,
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'message' => $req->message_content
            ]);
            $data = [
                'msg' => 'Updated Successfully',
                'status' => 'success',
                'data' => new MessageResource($message)
            ];

            return response()->json($data);
        } else {
            $data = [
                'msg' => 'No Such ID',
                'status' => 'Failed',
                'data' => Null
            ];

            return response()->json($data);
        }
    }
}
