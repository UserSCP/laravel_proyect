<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Puedes definir aquí la lógica de autorización si es necesario
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            // Otros campos y reglas de validación necesarios
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => __('required', ['attribute' => __('nombre')]),
    //         'name.string' => __('string', ['attribute' => __('nombre')]),
    //         'name.max' => __('max.string', ['attribute' => __('nombre'), 'max' => 100]),
    //         'parent_id.integer' => __('integer', ['attribute' => __('parent_id')]),
    //         // Puedes personalizar más mensajes de validación aquí según necesites
    //     ];
    // }
}
