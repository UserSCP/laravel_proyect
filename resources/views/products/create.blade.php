@extends('layouts.app')
@section('content')
    <x-form :route="route('products.store')" title="Crear Producto" :fields="$fields" buttonSubmit="Crear Producto" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
