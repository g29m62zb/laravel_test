<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'filial_id' => 'required|integer|exists:filials,id',
            'position_id' => 'required|integer|exists:positions,id',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'Имя обязательно',
            'last_name.required' => 'Фамилия обязательно',
            'filial_id.required' => 'ID Филиала обязательно',
            'position_id.required' => 'ID профессии обязательно',
            'filial_id.integer' => 'ID Филиала должно быть цифровым и существующим',
            'position_id.integer' => 'ID профессии должно быть цифровым и существующим',
        ];
    }
}
