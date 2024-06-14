@include('/layouts/head');
<div class="container">
<h3>Lista productos</h3>
<br><br>
    <a href="{{ route('products.create') }}">
        <button class="btn">Subir producto</button>
    </a>
@if(session('success'))
    <div class="alert">
    {{session('success')}}
    </div>
@endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>stock</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tbody class="table-group-divider">
        @foreach ($products as $product)    
        <tr>        
            <th>{{$product->id}}</th>
            <th>{{$product->name}}</th>
            <th>{{$product->price}}</th>
            <th>{{$product->description}}</th>
            <th>{{$product->stock}}</th>
            <th>
                <a href="{{route('products.edit',$product)}}">

                    <button class="btn">
                        Editar
                    </button>
                </a>
            </th>
            <th>
                <form action="{{route('products.destroy',$product)}}" method="POST">
@csrf
@method('DELETE')
                    <button type="submit"class="btn">
                        Eliminar
                    </button>
                </form>
                
            </th>
            </tr>
@endforeach
        </tbody>
    </table>
</dic>
