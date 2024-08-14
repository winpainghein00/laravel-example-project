<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'name' => 'required|string|min:3,max:20',
            'course_id' => 'required|integer',
            'email' => 'required|string',
            'date_of_birth' => 'required|date',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'please enter your name',
            'course_id.required' => 'please select a course',
            'email.required' => 'please enter your email',
            'date_of_birth.required' => 'please enter your birth date',
        ];
    }
}
