@extends('layouts.app')
@section('content')
    <x-form :route="route('categories.store')" title="Crear Categoria" :fields="$fields" buttonSubmit="Crear Categoria" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush


