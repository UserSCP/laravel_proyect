@extends('layouts.layout')

@section('title', 'Crear Marca')

@section('content')
    @component('components.form', [
        'route' => route('brands.store'),
        'title' => 'Crear Marca'
    ])
    @endcomponent
@endsection
