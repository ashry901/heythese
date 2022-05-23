<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id'            => 'required',
            'section_id'         => 'required',
            'subsection_id'      => 'nullable',
            'gender_id'          => 'required',
            'nationalitie_id'    => 'required',
            'phone'              => 'required',
            'profile_photo_path' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required'          => trans('validation.required'),
            'name_class_en.required' => trans('validation.required'),
        ];
    }
}
