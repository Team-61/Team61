<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'username' => 'required|string|unique:users,username',
            'name' => 'required|string',
            'bio' => 'required|string',
            'password' => 'confirmed',
            'avatar' => 'required|file|mimes:jpeg,bmp,png|max:3000',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string'
        ];
    }
}
