<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUpdateRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function delete($id){
        $course = Course::findOrFail($id);

        $course->delete();
        return redirect()->route('home')->with('message',__("language.deleted"));
    }

    public function store(CourseRequest $req){
        Course::create([
            'id' => $req->id,
            'title_en' => $req->title_en,
            'title_ar' => $req->title_ar,
            'description_en' => $req->description_en,
            'description_ar' => $req->description_ar,
            'hours' => $req->hours,
            'price' => $req->price
        ]);

        return redirect()->route('home')->with('course_message',__("language.created"));
    }

    public function update($id){
        $course = Course::findOrFail($id);

        return view('courses.update' , ['course' => $course]);
    }

    public function save(CourseUpdateRequest $req){
        $old_id = $req->old_id;
        $course = Course::findOrFail($old_id);

        $course->update([
            'id' => $req->id,
            'title_en' => $req->title_en,
            'title_ar' => $req->title_ar,
            'description_en' => $req->description_en,
            'description_ar' => $req->description_ar,
            'hours' => $req->hours,
            'price' => $req->price
        ]);

        return redirect()->route('home')->with('course_message',__("language.updated"));
    }
}
