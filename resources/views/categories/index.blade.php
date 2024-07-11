@extends('layouts.app')
@section('content')
    @include('categories.partials._alert')
    <div class="d-flex justify-content-between mb-3" style="margin-left: 20px">
        <h1> Lista de Categorias</h1>
    </div>
    <div class="filter-container">
        <a href="{{ route('categories.create') }}" style="max-width:150px;margin-left: 20px;" class="button button1">Agregar
            Categoria</a>
        @include('categories.partials._filter')
        </div>
        <x-table :columns="['ID', 'Name', 'Parent_id']" :route="route('categories.create')">
            <br>
            @foreach ($categories as $cate)
                <tr>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>{{ $cate->parent_id }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $cate) }}"><button class="button button2">Editar</button></a>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', $cate) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button button3">Eliminar</button>
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
