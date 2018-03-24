<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'password'=>'required',
            'email'=>'required'



        ];
    }

    public function messages()
    {
        return [
            'name.required'	=> 'pole wymagane',
            'password.required' => 'pole wymagane',
            'email.required' => 'pole wymagane'
        ];
    }
}
