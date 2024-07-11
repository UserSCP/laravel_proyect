@extends('layouts.app')
@section('content')
    <x-form :route="route('products.update', $product)" title="Actualizar Producto" :fields="$fields" :object="$product" buttonSubmit="Actualizar Producto" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush

