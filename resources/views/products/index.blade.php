@extends('layouts.layout')
@section('bottun','Subir Prodcuto')
@section('title', 'Tabla Productos')

@section('content')
    @component('components.table', ['route' => route('products.create')])
        @slot('route', $route)
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-success">Editar</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endcomponent
@endsection
