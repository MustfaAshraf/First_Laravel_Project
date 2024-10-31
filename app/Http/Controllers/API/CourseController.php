<?php

namespace App\Http\Controllers\API;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    function showAll()
    {
        $courses = CourseResource::collection(Course::all());
        $data = [
            "msg" => "All Courses",
            "status" => "success",
            "data" => $courses
        ];

        return response()->json($data);
    }

    function show($id)
    {
        $course = Course::find($id);

        if ($course) {
            $data = [
                'msg' => 'One Record',
                'status' => 'Success',
                'data' => new CourseResource($course),
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
        $course = Course::find($id);

        if ($course) {
            $course->delete();
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
            'id' => 'required|unique:courses|max:11',
            'title' => 'required|unique:courses|max:255',
            'description' => 'required|max:255',
            'hours' => 'required|max:255',
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

        $newCourse = Course::create([
            'id' => $req->id,
            'title' => $req->title,
            'description' => $req->description,
            'hours' => $req->hours,
            'price' => $req->price
        ]);

        $data = [
            'msg' => 'Created Successfully',
            'status' => 'Success',
            'data' => new CourseResource($newCourse)
        ];

        return response()->json($data);
    }

    function update(Request $req)
    {
        $old_id = $req->old_id;
        $course = Course::find($old_id);

        $validation = validator($req->all(), [
            'id' => [
                'required',
                Rule::unique('courses')->ignore($old_id),
                'max:11'
            ],
            'title' => [
                'required',
                Rule::unique('courses')->ignore($old_id),
            ],
            'description' => 'required|max:255',
            'hours' => 'required|max:255',
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

        if ($course) {
            $course->update([
                'id' => $req->id,
                'title' => $req->title,
                'description' => $req->description,
                'hours' => $req->hours,
                'price' => $req->price
            ]);
            $data = [
                'msg' => 'Updated Successfully',
                'status' => 'success',
                'data' => new CourseResource($course)
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
