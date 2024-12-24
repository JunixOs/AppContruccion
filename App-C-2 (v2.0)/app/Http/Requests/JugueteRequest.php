<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugueteRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'descripcion' => ['required', 'string', function ($attribute, $value, $fail) {
                $wordCount = str_word_count($value); // Cuenta las palabras en la descripción
                if ($wordCount > 90) {
                    $fail("La descripción debe tener menos de 90 palabras, actualmente tiene $wordCount.");
                }
            }],
			'precio' => 'nullable|numeric|regex:/^\d{1,4}(\.\d{1,2})?$/',
			'tiempo_uso' => 'required|numeric|between:0,1500',
			'user_id' => 'required|exists:users,id',
			'user_name' => 'required|string',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp,webp,tiff|max:2048',
        ];
    }
}
