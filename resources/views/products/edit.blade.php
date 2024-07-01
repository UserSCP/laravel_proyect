@extends('layouts.layout')

@section('title', 'Editar Producto')
@section('content')
<x-form :route="route('products.update', $product)" title="Editar Producto" :fields="$fields" :object="$product"/>
@endsection
@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
