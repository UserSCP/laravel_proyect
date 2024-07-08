@extends('layouts.layout')
@section('button','Subir Categoría')
@section('title', 'Tabla Categorías')

@section('content')
    <x-table :columns="['ID','Name','Parent_id']" :route="route('categories.create')">
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
