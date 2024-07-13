@extends('layouts.app')
@section('content')
    <x-form :route="route('categories.update', $category)" title="{{ __('fields.forms.category.edit.title') }}" :fields="$fields" :object="$category" buttonSubmit="{{ __('fields.forms.category.edit.submit') }}" />
@endsection

@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush

