@extends('layouts.app')
@section('content')
@include('partials._breadcrumbs')
<x-form :route="route('products.store')" title="{{ __('fields.forms.product.create.title') }}" :fields="$fields" buttonSubmit="{{ __('fields.forms.product.create.submit') }}" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
