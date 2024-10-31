<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    function showAll()
    {
        $categories = CategoryResource::collection(Category::all());
        $data = [
            "msg" => "All Categories",
            "status" => "success",
            "data" => $categories
        ];

        return response()->json($data);
    }

    function show($id)
    {
        $category = Category::find($id);

        if ($category) {
            $data = [
                'msg' => 'One Record',
                'status' => 'Success',
                'data' => new CategoryResource($category),
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
        $category = Category::find($id);

        if ($category) {
            $category->delete();
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
            'id' => 'required|unique:categories|max:11',
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Creation Failed',
                'status' => 'failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        $newCategory = Category::create([
            'id' => $req->id,
            'title' => $req->title,
            'description' => $req->description
        ]);

        $data = [
            'msg' => 'Created Successfully',
            'status' => 'Success',
            'data' => new CategoryResource($newCategory)
        ];

        return response()->json($data);
    }

    function update(Request $req)
    {
        $old_id = $req->old_id;
        $category = Category::find($old_id);

        $validation = validator($req->all(), [
            'id' => [
                'required',
                Rule::unique('categories')->ignore($old_id),
                'max:11'
            ],
            'title' => [
                'required',
                Rule::unique('categories')->ignore($old_id),
            ],
            'description' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            $data = [
                'msg' => 'Validation Failed',
                'status' => 'Failed',
                'data' => $validation->errors()
            ];

            return response()->json($data);
        }

        if ($category) {
            $category->update([
                'id' => $req->id,
                'title' => $req->title,
                'description' => $req->description
            ]);
            $data = [
                'msg' => 'Updated Successfully',
                'status' => 'success',
                'data' => new CategoryResource($category)
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
