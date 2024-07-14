@extends('layouts.app')
@section('content')
    @include('partials._alert')
    <div class="d-flex justify-content-between mb-3" style="margin-left: 20px">
        <h1>{{ __('fields.table.brand.title') }}</h1>
    </div>
    <div class="filter-container">
        <a href="{{ route('brands.create') }}" style="max-width:150px;margin-left: 20px;" class="button button1">{{ __('fields.table.brand.btn_create') }}</a>
        @include('partials._filter')

        <x-table :columns="['ID', __('fields.table.thead.name')]" :route="route('brands.create')">
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <a href="{{ route('brands.edit', $brand) }}"><button class="button button2">{{ __('fields.table.edit') }}</button></a>
                    </td>
                    <td>
                        <form action="{{ route('brands.destroy', $brand) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button button3">{{ __('fields.table.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-table>
        <br>
        {{ $brands->links('pagination::bootstrap-4') }}
    @endsection

    @push('styles')
        <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    @endpush
