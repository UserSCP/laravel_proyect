@extends('layouts.layout')
@section('button','Subir Categoría')
@section('title', 'Tabla Categorías')

@section('content')

    <x-table :columns="['ID','Name','Parent_id']" :route="route('categories.create')">
        <form method="GET" style=""  action="{{ route('categories.index') }}">
            <label for="parent_id">Filtrar por Categoría Padre:</label>
            <select name="parent_id" id="parent_id" onchange="this.form.submit()">
                <option value="">Selecciona una categoría</option>
                @foreach($parentCategories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </form>
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
    {{ $categories->links('pagination::default') }}
@endsection

@push('styles')
<link href="{{ asset('css/table.css') }}" rel="stylesheet">
@endpush
