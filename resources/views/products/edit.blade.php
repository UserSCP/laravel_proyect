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
