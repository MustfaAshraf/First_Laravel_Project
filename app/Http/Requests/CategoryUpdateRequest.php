<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => [
                'required',
                Rule::unique('categories')->ignore($this->old_id),
                'max:11'
            ],
            'title_en' => [
                'required',
                Rule::unique('categories')->ignore($this->old_id),
            ],
            'title_ar' => [
                'required',
                Rule::unique('categories')->ignore($this->old_id),
            ],
            'description_en' => 'required|max:255',
            'description_ar' => 'required|max:255'
        ];
    }
}
