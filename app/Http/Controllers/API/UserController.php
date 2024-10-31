<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    function showAll()
    {
        $users = UserResource::collection(User::all());
        $data = [
            "msg" => "All Users",
            "status" => "success",
            "data" => $users
        ];

        return response()->json($data);
    }

    function show($id)
    {
        $user = User::find($id);

        if ($user) {
            $data = [
                'msg' => 'One Record',
                'status' => 'Success',
                'data' => new UserResource($user),
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
        $user = User::find($id);

        if ($user) {
            $user->delete();
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
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8|max:20'
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Creation Failed',
                'status' => 'failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        $newUser = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        $data = [
            'msg' => 'Created Successfully',
            'status' => 'Success',
            'data' => new UserResource($newUser)
        ];

        return response()->json($data);
    }

    function update(Request $req)
    {
        $old_id = $req->old_id;
        $user = User::find($old_id);

        $validation = validator($req->all(),[
            'id' => [
                'required',
                Rule::unique('users')->ignore($old_id),
                'max:11'
            ],
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($old_id),
            ]
        ]);

        if($validation->fails()){
            $data = [
                'msg' => 'Validation Failed',
                'status' => 'Failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        if ($user) {
            $user->update([
                'id' => $req->id,
                'name' => $req->name,
                'email' => $req->email,
            ]);
            $data = [
                'msg' => 'Updated Successfully',
                'status' => 'success',
                'data' => new UserResource($user)
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
