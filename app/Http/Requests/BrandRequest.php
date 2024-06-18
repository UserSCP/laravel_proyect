<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => __('validation.required', ['attribute' => 'nombre']),
    //         'name.string'=>__('validation',['attribute'=>'nombre'])
    //     ];
    // }
}
