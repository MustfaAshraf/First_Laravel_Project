<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'id' => 'required|unique:categories|max:11',
            'title_en' => 'required|max:255',
            'title_ar' => 'required|max:255',
            'description_en' => 'required|max:255',
            'description_ar' => 'required|max:255'
        ];
    }
}
