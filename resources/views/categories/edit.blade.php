@extends('layouts.layout')

@section('title', 'Editar Categoria')

@php
    $fields = [
        [
            'type' => 'text',
            'name' => 'name',
            'placeholder' => __('fields.name.placeholder'),
            'label' => __('fields.name.label')
        ],
        [
            'type' => 'select',
            'name' => 'parent_id',
            'label' => __('fields.parent_category.label'),
            'options' => App\Models\Category::pluck('name', 'id')->toArray(),
            'condition' => 'categories'
],
   
    ];
@endphp

<x-form 
    :route="route('categories.update', $category)" 
    title="Editar Categoria"
    :fields="$fields"
    :object="$category"
/>

@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
