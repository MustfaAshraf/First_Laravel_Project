<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MeetingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|max:11', Rule::unique('meetings') , 
            'title_en' => 'required|max:255', Rule::unique('meetings') , 
            'title_ar' => 'required|max:255', Rule::unique('meetings') , 
            'description_en' => 'required|max:255',
            'description_ar' => 'required|max:255',
            'date' => 'required|max:255',
            'price' => 'required|max:255'
        ];
    }
}
