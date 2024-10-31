<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('home')->with('message',__("language.deleted"));
    }

    public function store (CategoryRequest $req){
        Category::create([
            'id' => $req->id,
            'title_en' => $req->title_en,
            'title_ar' => $req->title_ar,
            'description_en' => $req->description_en,
            'description_ar' => $req->description_ar
        ]);

        return redirect()->route('home')->with('category_message',__("language.created"));
    }


    public function update($id){
        $category = Category::findOrFail($id);

        return view('categories.update' , ['category'=>$category]);
    }

    public function save(CategoryUpdateRequest $req){
        $old_id = $req->old_id;

        $category = Category::findOrFail($old_id);
        $category->update([
            'id' => $req->id,
            'title_en' => $req->title_en,
            'title_ar' => $req->title_ar,
            'description_en' => $req->description_en,
            'description_ar' => $req->description_ar
        ]);

        return redirect()->route('home')->with('category_message',__("language.updated"));
    }
}
