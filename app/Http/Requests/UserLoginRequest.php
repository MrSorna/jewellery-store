<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email' => 'required|email|min:5|max:255',
            'password' => 'required|max:255',
        ];
    }


    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => 'Email not correct!',
            'email.min' => 'Email is short!',
            'email.max' => 'Email is long(max250)!',
            'email.required' => 'Email is required!',

            'password.required' => 'Password is required!',
            'password.max' => 'Password is long(max250)!',
        ];
    }
}
