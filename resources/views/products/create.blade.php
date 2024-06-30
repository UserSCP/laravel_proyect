@extends('layouts.layout')

@section('title', 'Crear Producto')

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
@section('content')
<x-form 
    :route="route('products.store')" 
    title="Crear Producto"
    :fields="$fields"
/>
@endsection
@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
