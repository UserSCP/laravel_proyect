@extends('layouts.app')
@section('content')
    <x-form :route="route('categories.update', $category)" title="Actualizar Categoria" :fields="$fields" :object="$category" buttonSubmit="Actualizar Categoria" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush

