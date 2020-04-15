<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserChangeDetails extends FormRequest
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
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
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
            'first_name.required' => 'First Name is required!',
            'first_name.string' => 'First Name not correct!',
            'first_name.min' => 'First Name is short!',
            'first_name.max' => 'First Name is long(max250)!',

            'last_name.required' => 'Last Name is required!',
            'last_name.string' => 'Last Name not correct!',
            'last_name.min' => 'Last Name is short!',
            'last_name.max' => 'Last Name is long(max250)!',
        ];
    }
}
