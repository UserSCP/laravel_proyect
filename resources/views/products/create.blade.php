@extends('layouts.layout')

@section('title', 'Crear Producto')

@section('content')
    @component('components.form', [
        'route' => route('products.store'),
        'title' => 'Crear Producto'
    ])
    @endcomponent
@endsection
@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush