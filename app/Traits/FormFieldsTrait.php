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
                    'label' => __('fields.forms.field.name.label'),
                    'placeholder'=>__('fields.forms.field.name.placeholder')
                ];
                break;

            case 'price':
                $formFields[] = [
                    'type' => 'text',
                    'name' => 'price',
                    'label' => __('fields.forms.field.price.label'),
                    'placeholder'=>__('fields.forms.field.price.placeholder')

                ];
                break;

            case 'brand_id':
                $brands = Brand::all()->pluck('name', 'id');
                $brands->prepend(__('fields.forms.field.brand.first_choice'), '');
                $formFields[] = [
                    'type' => 'select',
                    'name' => 'brand_id',
                    'label' => __('fields.forms.field.brand.label'),
                    'options' => $brands
                ];
                break;

                case 'categories':
                    $categories = Category::all()->pluck('name', 'id');
                    $categories->prepend(__('fields.forms.field.product_category.none_choice'), '');
                    $formFields[] = [
                        'type' => 'checkbox-group',
                        'name' => 'categories[]',
                        'label' => __('fields.forms.field.product_category.label'),
                        'options' => $categories
                    ];
                    break;
                case 'category':
                    $category=Category::all()->pluck('name','id');
                    $category->prepend(__('fields.forms.field.parent_category.first_choice'), '');
                    $formFields[] = [
                        'type' => 'select',
                        'name' => 'parent_id',
                        'label' => __('fields.forms.field.parent_category.label'),
                        'options' => $category
                    ];
                    break;
        }
    }

    return $formFields;
}

}
