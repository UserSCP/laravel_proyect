@extends('layouts.app')
@section('content')
    <x-form :route="route('brands.store')" title="{{ __('fields.forms.brand.create.title') }}" :fields="$fields" buttonSubmit="{{ __('fields.forms.brand.create.submit') }}" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush

