@extends('layouts.layout')

@section('title', 'Actualizar Producto')

@section('content')
    <x-form :route="route('products.update', $product)" title="Actualizar Producto" :fields="$fields" :object="$product"/>
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
