@extends('layouts.app')
@section('content')
    <x-form :route="route('brands.update', $brand)" title="Actualizar Marca" :fields="$fields" :object="$brand" buttonSubmit="Actualizar Marca" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush