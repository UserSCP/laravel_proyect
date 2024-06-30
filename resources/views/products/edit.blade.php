@extends('layouts.layout')

@section('title', 'Editar Producto')

@php
    $fields = [
        [
            'type' => 'text',
            'name' => 'name',
            'placeholder' => __('fields.name.placeholder'),
            'label' => __('fields.name.label')
        ],
        [
            'type' => 'text',
            'name' => 'price',
            'placeholder' => __('fields.price.placeholder'),
            'label' => __('fields.price.label'),
            'condition' => 'products'
        ],
   
    ];
@endphp

<x-form 
    :route="route('products.update', $product)" 
    title="Editar Producto"
    :fields="$fields"
    :object="$product"
/>

@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
