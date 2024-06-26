@extends('layouts.layout')
@section('bottun','Subir Prodcuto')
@section('title', 'Tabla Categorias')

@section('content')
    @component('components.table', ['route' => route('categories.create')])
    @slot('components.table')
        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->parent_id }}</td>
                <td>{{ $categorie->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $categorie) }}">
                        <button class="button button2">Editar</button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', $categorie) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button button3">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endcomponent
@endsection
@push('styles')
<link href="{{ asset('css/table.css') }}" rel="stylesheet">
@endpush