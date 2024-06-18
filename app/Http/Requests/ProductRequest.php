<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return
        [
        'name'=>'required|string|max:100',
        'price'=>'required|numeric',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => __('validation.required', ['attribute' => 'nombre']),
    //         'name.string' => __('validation.string', ['attribute' => 'nombre']),
    //         'name.max' => __('validation.max.string', ['attribute' => 'nombre', 'max' => 100]),
    //         'price.required'=>__('validation.requires',['attribute'=>'precio']),
    //         'price.integer' => __('validation.integer', ['attribute' => 'precio']),
    //     ];
    // }
}
