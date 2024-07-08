@extends('layouts.layout')
@section('button', 'Subir Producto')
@section('title', 'Tabla Productos')

@section('content')
    <x-table :columns="['ID', 'Name', 'Price', 'Brand_id', 'Categories']" :route="route('products.create')">
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price_with_tax  }}</td>
                <td>{{ $product->brand_id }}</td>
                <td>{{ $product->getCategoryNamesAttribute() }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}"><button class="button button2">Editar</button></a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button button3">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </x-table>
    <br>
    {{ $products->links('pagination::default') }}
@endsection

@push('styles')
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
@endpush
