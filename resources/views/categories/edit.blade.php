@extends('layouts.layout')

@section('title', 'Actualizar Categoria')

@section('content')
    <x-form :route="route('categories.update', $category)" title="Actualizar categories" :fields="$fields" :object="$category"/>
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
