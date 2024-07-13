@extends('layouts.app')
@section('content')
    <x-form :route="route('products.update', $product)" title="{{ __('fields.forms.product.edit.title') }}" :fields="$fields" :object="$product" buttonSubmit="{{ __('fields.forms.product.edit.submit') }}" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush

