@extends('layouts.app')
@section('content')
    <x-form :route="route('categories.store')" title="{{ __('fields.forms.category.create.title') }}" :fields="$fields" buttonSubmit="{{ __('fields.forms.category.create.submit') }}" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush


