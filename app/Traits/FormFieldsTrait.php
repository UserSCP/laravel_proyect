<?php

namespace App\Traits;

use App\Models\Category;
use App\Models\Brand;

trait FormFieldsTrait
{
    public function getFormFields(array $fields)
{
    $formFields = [];

    foreach ($fields as $field) {
        switch ($field) {
            case 'name':
                $formFields[] = [
                    'type' => 'text',
                    'name' => 'name',
                    'label' => 'Name'
                ];
                break;

            case 'price':
                $formFields[] = [
                    'type' => 'text',
                    'name' => 'price',
                    'label' => 'Price'
                ];
                break;

            case 'brand_id':
                $brands = Brand::all()->pluck('name', 'id');
                $brands->prepend('Ninguna marca', '');
                $formFields[] = [
                    'type' => 'select',
                    'name' => 'brand_id',
                    'label' => 'Brand',
                    'options' => $brands
                ];
                break;

                case 'categories':
                    $categories = Category::all()->pluck('name', 'id');
                    $categories->prepend('Ninguna categoría', '');
                    $formFields[] = [
                        'type' => 'checkbox-group',
                        'name' => 'categories[]',
                        'label' => 'Categories',
                        'options' => $categories
                    ];
                    break;
                case 'category':
                    $category=Category::all()->pluck('name','id');
                    $category->prepend('Ninguna categoría', '');
                    $formFields[] = [
                        'type' => 'select',
                        'name' => 'parent_id',
                        'label' => 'categories',
                        'options' => $category
                    ];
                    break;
        }
    }

    return $formFields;
}

}
