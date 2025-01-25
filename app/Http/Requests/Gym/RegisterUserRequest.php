<?php

namespace App\Http\Requests\Gym;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_first_name' => 'required|string',
            'user_last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required_with:password|string|min:6',
            'user_phone_number' => 'required|digits:10|unique:users,user_phone_number',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function messages(): array 
    {
        return [
            'user_first_name.required' => 'The :attribute is required!',
            'user_last_name.required' => 'The :attribute is required',
            'email.required' => 'The :attribute is required',
            'email.email' => 'The :attribute is invalid',
            'email.unique' => 'The :attribute is already taken',
            'password.required' => 'A :attribute is required for registration.',
            'password.min' => 'Your :attribute must be at least :min characters.',
            'password.confirmed' => 'The :attribute confirmation does not match.',
            'password_confirmation.required_with' => 'Please confirm your password.',
            'user_phone_number.required' => 'Your :attribute is required.',
            'user_phone_number.unique' => 'This :attribute is already registered.',
            'user_phone_number.digits' => 'Your :attribute must be exactly :digits digits.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'user_first_name' => 'first name',
            'user_last_name' => 'last name',
            'email' => 'email address',
            'password' => 'Password',
            'password_confirmation' => 'password confirmation',
            'user_phone_number' => 'phone number',
        ];
    }
}
