<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'list_classes.*.name_subsection_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => trans('validation.required'),
            'name.unique'       => trans('validation.unique'),
            'name_en.required'  => trans('validation.required'),
            'name_en.unique'    => trans('validation.unique'),
        ];
    }
}
