<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Enumerations\CategoryType;

class TestRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:tests,slug,'.$this->id,
            'photo' => 'required|mimes:jpg,jpeg,png|max:1999'
        ];
    }

    public function messages()
    {
        return [
            //'Marble' => 'Marble',
        ];
    }
}
