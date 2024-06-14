@include('/layouts/head');
<form class="container-sm" action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <h3>Editar producto</h3>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        El campo precio solo acepta valores numericos
    </div>
    @endif
    <br>
    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ $product->name }}" required>
    <br>
    <input type="text" class="form-control" placeholder="Precio" name="price" value="{{ $product->price }}" required>
    <br>
    <input type="text" class="form-control" placeholder="descripcion" name="description" value="{{$product->description}}">
    <br>
    <select class="form-control" id="stock" name="stock" required>
        @foreach(\App\Models\Product::stockOptions() as $key => $value)
        <option value="{{ $key }}" {{ isset($product) && $product->stock == $key ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
<br>
    <input type="submit" class="btn btn-success" name="" id="">
</form>