@extends('layouts.layout')

@section('title', 'Editar Producto')

@section('content')
    @component('components.form', [
        'route' => route('products.update', $product),
        'title' => 'Editar Producto',
        'object' => $product
    ])
    @endcomponent
@endsection
@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush