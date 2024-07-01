@extends('layouts.layout')

@section('title', 'Editar Categoria')

<x-form :route="route('categories.update', $category)" title="Editar Categoria":fields="$fields":object="$category"/>

@push('styles')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
