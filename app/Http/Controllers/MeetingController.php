<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeetingRequest;
use App\Http\Requests\MeetingUpdateRequest;
use App\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function delete($id){
        $meeting = Meeting::findOrFail($id);

        $meeting->delete();
        return redirect()->route('home')->with('meeting_message',__("language.deleted"));
    }

    public function store(MeetingRequest $req){
        Meeting::create([
            'id' => $req->id,
            'title_en' => $req->title_en,
            'title_ar' => $req->title_ar,
            'description_en' => $req->description_en,
            'description_ar' => $req->description_ar,
            'date' => $req->date,
            'price' => $req->price,
        ]);

        return redirect()->route('home')->with('meeting_message',__("language.created"));
    }

    public function update($id){
        $meeting = Meeting::findOrFail($id);

        return view('meetings.update' , ['meeting' => $meeting]);
    }

    public function save(MeetingUpdateRequest $req){
        $old_id = $req->old_id;
        $meeting = Meeting::findOrFail($old_id);

        $meeting->update([
            'id' => $req->id,
            'title_en' => $req->title_en,
            'title_ar' => $req->title_ar,
            'description_en' => $req->description_en,
            'description_ar' => $req->description_ar,
            'date' => $req->date,
            'price' => $req->price
        ]);

        return redirect()->route('home')->with('meeting_message',__("language.updated"));
    }
}
