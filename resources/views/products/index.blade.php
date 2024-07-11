@extends('layouts.app')
@section('content')

    @include('products.partials._alert')

    <div class="d-flex justify-content-between mb-3" style="margin-left: 20px">
        <h1> Lista de Productos</h1>
    </div>
    <div class="filter-container">
   <a href="{{ route('products.create') }}" style="max-width:150px;margin-left: 20px;" class="button button1">Agregar Producto</a>
   @include('products.partials._filter')    
</div>

    <x-table :columns="['ID', 'Nombre', 'Precio', 'Marca', 'Categorías']" :route="route('products.create')">
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product->getCategoryNamesAttribute() }}</td>
                <td >
                    <a href="{{ route('products.edit', $product) }}" class="button button2">Editar</a>
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
    {{ $products->links('pagination::bootstrap-4') }}
    @endsection
@push('styles')
<link href="{{ asset('css/table.css') }}" rel="stylesheet">
@endpush
