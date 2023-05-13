<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorenotaRequest extends FormRequest
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
            'onda' => 'required|integer|exists:ondas,id',
            'notaParcial1' => 'required|integer',
            'notaParcial2' => 'required|integer',
            'notaParcial3' => 'required|integer',
        ];
    }
}
