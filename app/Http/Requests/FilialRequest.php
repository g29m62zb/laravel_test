<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Название обязательно',
            'name.string' => 'Название должно состоять из букв',
            'name.unique' => 'Название должно быть уникальным',
        ];
    }
}
