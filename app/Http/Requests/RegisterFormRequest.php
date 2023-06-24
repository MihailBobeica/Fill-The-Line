<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:64'],
            'email' => ['sometimes', 'nullable', 'string', 'max:256', 'email', 'regex:/^.+@.+\.[a-zA-Z]{2,4}$/'],
            'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers(), 'max:64', 'confirmed'],
        ];
    }
}
