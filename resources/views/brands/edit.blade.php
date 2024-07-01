@extends('layouts.layout')

@section('title', 'Actualizar Marca')

@section('content')
    <x-form :route="route('brands.update', $brand)" title="Actualizar Marca" :fields="$fields" :object="$brand"/>
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
