@extends('layouts.layout')

@section('title', 'Editar Categoria')

@section('content')
    @component('components.form', [
        'route' => route('categories.update', $category),
        'title' => 'Editar Categoria',
        'object' => $category
    ])
    @endcomponent
@endsection
@push('styles')
    @php
        $useFormsStyles = true;
    @endphp
@endpush