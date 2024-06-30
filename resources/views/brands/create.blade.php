@extends('layouts.layout')

@section('title', 'Crear Marca')

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
@section('content')
<x-form 
    :route="route('brands.store')" 
    title="Crear Marca"
    :fields="$fields"
/>
@endsection
@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
