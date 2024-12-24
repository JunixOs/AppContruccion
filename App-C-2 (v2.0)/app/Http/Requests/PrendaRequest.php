<?php

namespace App\Http\Requests;

use App\Models\Prenda;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class PrendaRequest extends FormRequest
{
    /**
     * Determina si el usuario esta autorizado a realizar los cambios, o sea, si esta autenticado
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtiene las reglas de validacion, para luego mostrar los mensajes de error por si alguno se cumple, los mensajes estan en FormRequest
     *
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp,tiff|max:2048',
            'user_name' => 'required|string',
            'talla' => 'required|numeric|between:0,50'
        ];
    }
}
