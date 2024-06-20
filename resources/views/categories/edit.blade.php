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
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush