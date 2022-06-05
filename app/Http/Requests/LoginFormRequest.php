<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please Enter Email',
            'email.email' => 'Email should contain @,.',
            'password.required' => 'Please enter password',
            'password.min' => 'Password must be 8 characters long',
            'password.regex' => 'Password must contain lower,upper,numbers,special characters and should be 8 characters long',
        ];
    }
}
