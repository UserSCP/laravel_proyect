@extends('layouts.app')
@section('content')
    <x-form :route="route('brands.update', $brand)" title="{{ __('fields.forms.brand.edit.title') }}" :fields="$fields" :object="$brand" buttonSubmit="{{ __('fields.forms.brand.edit.submit') }}" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush