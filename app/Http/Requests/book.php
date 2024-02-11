<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class book extends FormRequest
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
            'b_name' => 'required',
            'b_phone' => 'required',
            'b_time' => 'required',
            'b_date' => 'required|date|after_or_equal:today',
        ];
    }

    public function messages(): array
    {
        return [
            'b_name.required' => 'name is required',
            'b_phone.required' => 'phone is required',
            'b_time.required' => 'time is required',
            'b_date.required' => 'date is required',
            'b_date.after_or_equal:today' => 'date is after_or_equal:today',
        ];
    }
}