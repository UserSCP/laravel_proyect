@php
use Illuminate\Support\Str;
@endphp
<h3>@yield('title')</h3>
<form action="{{route}}"method="POST">
  @csrf
  @if(isset($object))
  @method('PUT')
  @endif
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <br>
    @if (Str::contains(Route::currentRouteName(),'categories'))
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Id Parent" id="id_parent" value="{{old(id_parent)??(isset($object)?$object->name:'')}}">
    @endif
    <br>
    <input type="text" class="form-control @error('name') is-invalid @enderror"placeholder="Name" id="name" value="{{old(name)??(isset($object)?$object->name:'')}}">
    @if (Str::contains(Route::currentRouteName(),'products'))
        <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="DescripcionS" value="{{old(price)??(isset($object)?$object->price:'')}}">
        <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"placeholder="description" value="{{old(description)??(isset($object)?$object->description:'')}}">
    @endif
    <br>
    <input type="submit" class="form-control">
</form>