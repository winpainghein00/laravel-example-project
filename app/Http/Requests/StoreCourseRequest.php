<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'description' => 'required|string|min:5,max:30',
            'student_limit' => 'required|integer|min:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'please enter course name',
            'description.required' => 'please enter course description',
            'student_limit.required' => 'please limit students at least 10',
            'start_date.required' => 'required start date',
            'end_date.required' => 'required end date',
        ];
    }
}
