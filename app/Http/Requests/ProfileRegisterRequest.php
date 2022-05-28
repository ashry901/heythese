<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //'user_id' => 'required',
            'category' => 'required',
            'section_id' => 'required',
            'gender_id' => 'required',
            'nationalitie_id'  => 'required',
            'phone' => 'required',
            //'phone' => 'nullable',
        ];
    }
}
