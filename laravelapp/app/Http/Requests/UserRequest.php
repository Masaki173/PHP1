<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'user/create')
        {
            return true;
        } else {
        return false;
        }
    }

    public function rules()
    {
        return [
          'username'     => 'required',
          'new_email'    => 'required|email',
          'new_pass'     => 'required|min:7',
          'confirm_pass' => 'required|same:new_pass',
        ];
    }
}
