@extends('layouts.layout')
@section('bottun','Subir Marca')
@section('title', 'Tabla Marca')

@section('content')
    @component('components.table', ['route' => route('brands.create')])
        @slot('route', $route)
        @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
                <td>
                    <a href="{{ route('brands.edit', $brand) }}" class="btn btn-success">Editar</a>
                </td>
                <td>
                    <form action="{{ route('brands.destroy', $brand) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endcomponent
@endsection
