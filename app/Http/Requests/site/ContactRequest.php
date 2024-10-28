<?php

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'msg_name' => 'required|string|min:5|max:100',
            'phone' => 'nullable|string',
            'email' => 'required|email',
            'subject' => 'required|string|min:6',
            'message' => 'required|string|min:10'
        ];
    }
}
