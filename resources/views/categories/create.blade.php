
@extends('layouts.layout')

@section('title', 'Crear Categoria')

@section('content')
    @component('components.form', [
        'route' => route('categories.store'),
        'title' => 'Crear Categoria'
    ])
    @endcomponent
@endsection
@push('styles')
    @php
        $useFormsStyles = true;
    @endphp
@endpush