@extends('layouts.app')
@section('content')
@include('partials._breadcrumbs', ['breadcrumbs' => $breadcrumbs])

    @include('partials._alert')
    <div class="d-flex justify-content-between mb-3" style="margin-left: 20px">
        <h1>{{ __('fields.table.category.title') }}</h1>
    </div>
    <div class="filter-container">
        <a href="{{ route('categories.create') }}" style="max-width:150px;margin-left: 20px;" class="button button1">{{ __('fields.table.category.btn_create') }}</a>
        @include('categories.partials._filter')
        </div>
        <x-table :columns="['ID', __('fields.table.thead.name'), __('fields.table.thead.parent_category')]" :route="route('categories.create')">
            @foreach ($categories as $cate)
                <tr>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>{{ $cate->parent_id }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $cate) }}"><button class="button button2">{{ __('fields.table.edit') }}</button></a>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', $cate) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button button3">{{ __('fields.table.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-table>
        <br>
        {{ $categories->links('pagination::bootstrap-4') }}
    @endsection

    @push('styles')
        <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    @endpush
