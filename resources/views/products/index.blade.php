@extends('layouts.layout')
@section('button', 'Subir Producto')
@section('title', 'Tabla Productos')

@section('content')
    <x-table :columns="['ID', 'Name', 'Price', 'Brand_id', 'Categories']" :route="route('products.create')">
        <div class="filter-container">
            <form method="GET" action="{{ route('products.index') }}">
                <label for="sort_price">Ordenar por precio:</label>
                <select name="sort_price" id="sort_price" class="select" onchange="this.form.submit()">
                    <option value="" {{ request('sort_price') == '' ? 'selected' : '' }}>Seleccione una opción</option>
                    <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>Menor a mayor</option>
                    <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>Mayor a menor</option>
                </select>
            </form>
        </div>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price_with_tax }}</td>
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
    <div class="pagination-container " style="margin-bottom: 20px">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
@endsection

@push('styles')
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
@endpush
