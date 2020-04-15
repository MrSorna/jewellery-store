<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class UserChangePassword extends FormRequest
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
            'password' => ['required', new MatchOldPassword],
            'new_password' => 'required|confirmed|min:8|max:255',
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
            'password.required' => 'Password is required!',

            'new_password.required' => 'Password is required!',
            'new_password.min' => 'Password is short(min8)!',
            'new_password.max' => 'Password is long(max250)!',
        ];
    }
}
