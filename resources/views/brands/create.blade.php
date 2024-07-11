@extends('layouts.app')
@section('content')
    <x-form :route="route('brands.store')" title="Crear Marca" :fields="$fields" buttonSubmit="Crear Marca" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush

