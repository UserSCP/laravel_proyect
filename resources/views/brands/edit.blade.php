@extends('layouts.layout')

@section('title', 'Editar Marca')

@php
    $fields = [
        [
            'type' => 'text',
            'name' => 'name',
            'placeholder' => __('fields.name.placeholder'),
            'label' => __('fields.name.label')
        ],
    ];
@endphp

<x-form 
    :route="route('brands.update', $brand)" 
    title="Editar Marca"
    :fields="$fields"
    :object="$brand"
/>

@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
