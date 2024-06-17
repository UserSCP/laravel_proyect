@php
use Illuminate\Support\Str;
@endphp
<h3>{{ $title }}</h3>
<form action="{{ $route }}" method="POST">
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
    @if (Str::contains(Route::currentRouteName(), 'categories'))
        <input type="text" name="parent_id" class="form-control @error('parent_id') is-invalid @enderror" placeholder="Id Parent" value="{{ old('parent_id') ?? (isset($object) ? $object->parent_id : '') }}">
    @endif
    <br>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') ?? (isset($object) ? $object->name : '') }}">
    <br>
    @if (Str::contains(Route::currentRouteName(), 'products'))
        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" value="{{ old('price') ?? (isset($object) ? $object->price : '') }}">
        {{-- <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" value="{{ old('description') ?? (isset($object) ? $object->description : '') }}"> --}}
    @endif
    <br>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>
