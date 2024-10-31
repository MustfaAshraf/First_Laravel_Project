<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MeetingResource;
use App\Meeting;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MeetingController extends Controller
{
    function showAll()
    {
        $meetings = MeetingResource::collection(Meeting::all());
        $data = [
            "msg" => "All Meetings",
            "status" => "success",
            "data" => $meetings
        ];

        return response()->json($data);
    }

    function show($id)
    {
        $meeting = Meeting::find($id);

        if ($meeting) {
            $data = [
                'msg' => 'One Record',
                'status' => 'Success',
                'data' => new MeetingResource($meeting),
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
        $meeting = Meeting::find($id);

        if ($meeting) {
            $meeting->delete();
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
            'id' => 'required|unique:meetings|max:11',
            'title' => 'required|unique:meetings|max:255',
            'description' => 'required|max:255',
            'date' => 'required|max:255',
            'price' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Creation Failed',
                'status' => 'failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        $newMeeting = Meeting::create([
            'id' => $req->id,
            'title' => $req->title,
            'description' => $req->description,
            'date' => $req->date,
            'price' => $req->price
        ]);

        $data = [
            'msg' => 'Created Successfully',
            'status' => 'Success',
            'data' => new MeetingResource($newMeeting)
        ];

        return response()->json($data);
    }

    function update(Request $req)
    {
        $old_id = $req->old_id;
        $meeting = Meeting::find($old_id);

        $validation = validator($req->all(), [
            'id' => [
                'required',
                Rule::unique('meetings')->ignore($old_id),
                'max:11'
            ],
            'title' => [
                'required',
                Rule::unique('meetings')->ignore($old_id),
            ],
            'description' => 'required|max:255',
            'date' => 'required|max:255',
            'price' => 'required|max:255',
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Validation Failed',
                'status' => 'Failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        if ($meeting) {
            $meeting->update([
                'id' => $req->id,
                'title' => $req->title,
                'description' => $req->description,
                'date' => $req->date,
                'price' => $req->price
            ]);
            $data = [
                'msg' => 'Updated Successfully',
                'status' => 'success',
                'data' => new MeetingResource($meeting)
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
