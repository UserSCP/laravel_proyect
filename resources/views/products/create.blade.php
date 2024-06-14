@include('/layouts/head');
<form class="container-sm" action="{{ route('products.store') }}" method="POST">
    @csrf
    <h3>Subir producto</h3>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            El campo precio solo acepta valores numericos
        </div>
    @endif
    <br>
    <input type="text" class="form-control" placeholder="Nombre" name="name" required>
    <br>
    <input type="text" class="form-control" placeholder="Precio" name="price" required>
    <br>
    <input type="text" name="description" class="form-control" placeholder="descripcion">
    <br>
    <select class="form-control" id="stock" name="stock" required>
            @foreach(\App\Models\Product::stockOptions() as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    <br>
    <input type="submit" class="btn" name="" id="">
</form>