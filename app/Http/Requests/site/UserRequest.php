<?php

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:100',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'is_admin' => 'nullable|boolean',
            'is_manager' => 'nullable|boolean',
            'is_doctor' => 'nullable|boolean',
            'is_patient' => 'nullable|boolean',
        ];
    }
}
