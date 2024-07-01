<?php

namespace App\Traits;

use App\Models\Category;
use App\Models\Brand;

trait FormFieldsTrait
{
    private function getFormFields(array $neededFields = [])
    {
        $categories = Category::all();
        $brands = Brand::pluck('name', 'id')->toArray();
        $category = Category::pluck('name', 'id')->toArray();

        $fields = [
            'name' => [
                'type' => 'text',
                'name' => 'name',
                'placeholder' => __('fields.name.placeholder'),
                'label' => __('fields.name.label'),
            ],
            'price' => [
                'type' => 'text',
                'name' => 'price',
                'placeholder' => __('fields.price.placeholder'),
                'label' => __('fields.price.label'),
            ],
            'brand_id' => [
                'type' => 'select',
                'name' => 'brand_id',
                'label' => __('fields.brand.label'),
                'options' => $brands,
            ],
            'category' => [
                'type' => 'select',
                'name' => 'parent_id',
                'label' => __('fields.parent_category.label'),
                'options' => $category,
            ],


            'categories' => [
                'type' => 'checkbox-group',
                'name' => 'categories[]',
                'label' =>'Categoria',
                'options' => Category::pluck('name', 'id')->toArray(),
            ]
        ];
        if (!empty($neededFields)) {
            $fields = array_filter($fields, function ($key) use ($neededFields) {
                return in_array($key, $neededFields);
            }, ARRAY_FILTER_USE_KEY);
        }
        return $fields;
    }
}
