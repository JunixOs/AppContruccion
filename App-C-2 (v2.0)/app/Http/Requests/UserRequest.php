<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'name' => ['required', 'string', function ($attribute, $value, $fail) {
                $wordCount = str_word_count($value); // Cuenta las palabras en la descripción
                if ($wordCount > 5) {
                    $fail("El nombre de usuario debe tener menos de 5 palabras, actualmente tiene $wordCount.");
                }
            }],
			'email' => 'required|string|email',
			'telefono' => 'required|numeric|digits_between:5,10',
            'extension_telefonica' => 'required|string',
            'imagen_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp,tiff|max:2048'
        ];
    }
}
