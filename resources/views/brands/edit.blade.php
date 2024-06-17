@extends('layouts.layout')

@section('title', 'Editar Marca')

@section('content')
    @component('components.form', [
        'route' => route('brands.update', $brand),
        'title' => 'Editar Marca',
        'object' => $brand
    ])
    @endcomponent
@endsection