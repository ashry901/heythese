<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Enumerations\CategoryType;

class SubsectionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'list_classes.*.name' => 'required',
            'list_classes.*.name_class_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_subsection.required'     => trans('cpanel.validation.required'),
            'name_subsection_en.required'  => trans('cpanel.validation.required'),
        ];
    }
}
