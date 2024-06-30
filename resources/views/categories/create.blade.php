@extends('layouts.layout')

@section('title', 'Crear Categoria')

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
        ]
    ];
@endphp
@section('content')
<x-form 
    :route="route('categories.store')" 
    title="Crear Categoria"
    :fields="$fields"
/>
@endsection
@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
