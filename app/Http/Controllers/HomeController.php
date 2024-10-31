<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Meeting;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $categories = DB::table('categories')->select('id','title_'. app()->getLocale() . ' as title','description_'. app()->getLocale() .' as description','created_at','updated_at')->get();
        $courses = DB::table('courses')->select('id','title_'. app()->getLocale() . ' as title','description_'. app()->getLocale() .' as description','hours','price','created_at','updated_at')->get();
        $meetings = DB::table('meetings')->select('id','title_'. app()->getLocale() . ' as title','description_'. app()->getLocale() .' as description','date','price','created_at','updated_at')->get();
        $messages = Message::all();

        return view('home' , ['categories'=>$categories , 'users'=>$users , 'courses'=>$courses , 'meetings'=>$meetings , 'messages'=>$messages]);
    }

    public function delete($id){
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('home')->with('message',__("language.deleted"));
    }

    public function store(UserRequest $req){

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect()->route('home')->with('message',__("language.created"));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.update' , ['user'=>$user]);
    }

    public function save(UserUpdateRequest $req){

        $old_id = $req->old_id;
        $user = User::findOrFail($old_id);
        
        $user->update([
            'id' => $req->id,
            'name' => $req->name,
            'email' => $req->email,
        ]);

        return redirect()->route('home')->with("message",__('language.updated'));
    }
}
