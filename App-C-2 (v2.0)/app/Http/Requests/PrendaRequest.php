<?php

namespace App\Http\Requests;

use App\Models\Prenda;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class PrendaRequest extends FormRequest
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
			'descripcion' => 'required|string',
			'precio' => 'nullable|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/',
			'tiempo_uso' => 'required',
			'user_id' => 'required|exists:users,id',
            'image' => 'required'
        ];
    }


}
