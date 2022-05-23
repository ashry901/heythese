<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Enumerations\CategoryType;

class SectionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'    => 'required|unique:sections,name->ar,'.$this->id,
            'name_en' => 'required|unique:sections,name->en,'.$this->id,
            //'slug' => 'required|unique:tests,slug,'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => trans('cpanel.validation.required'),
            'name.unique'       => trans('cpanel.validation.unique'),
            'name_en.required'  => trans('cpanel.validation.required'),
            'name_en.unique'    => trans('cpanel.validation.unique'),
        ];
    }
}
