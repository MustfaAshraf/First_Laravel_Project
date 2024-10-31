<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|max:11', Rule::unique('courses') , 
            'title_en' => 'required|max:255', Rule::unique('courses') , 
            'title_ar' => 'required|max:255', Rule::unique('courses') , 
            'description_en' => 'required|max:255',
            'description_ar' => 'required|max:255',
            'hours' => 'required|max:255',
            'price' => 'required|max:255'
        ];
    }
}
