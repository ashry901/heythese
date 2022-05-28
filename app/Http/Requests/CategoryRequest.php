<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Enumerations\CategoryType;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            //'type' => 'required|in:1,2',
            'slug' => 'required|unique:categories,slug,'.$this->id,
            'photo' => 'nullable_without:id|mimes:jpg,jpeg,png'
        ];
    }

    public function messages()
    {
        return [
            //'Marble' => 'Marble',
        ];
    }
}
