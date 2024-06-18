@php
    use Illuminate\Support\Str;
@endphp
<h2 style="text-align: center">{{ $title }}</h2>
@if ($errors->any())
<div class="container">
    
            @foreach ($errors->all() as $error)
            <div class="alert4">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ $error }}
        </div><br>
            @endforeach
        
    
</div>
@endif

<div class="container">
    <div class="div">
        <form action="{{ $route }}" method="POST">
            @csrf
            @if (isset($object))
                @method('PUT')
            @endif

            <br>
            @if (Str::contains(Route::currentRouteName(), 'categories'))
                <label for="fname">Parent_ID</label>
                <input type="text" name="parent_id" class="form-control @error('parent_id') is-invalid @enderror"
                    placeholder="Id Parent"
                    value="{{ old('parent_id') ?? (isset($object) ? $object->parent_id : '') }}">
                    @error('parent_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
            @endif
            <br>
            <label for="fname">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                placeholder="Name" value="{{ old('name') ?? (isset($object) ? $object->name : '') }}">
            <br>
            @if (Str::contains(Route::currentRouteName(), 'products'))
                <label for="fname">Price</label>

                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                    placeholder="Price" value="{{ old('price') ?? (isset($object) ? $object->price : '') }}">
                {{-- <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" value="{{ old('description') ?? (isset($object) ? $object->description : '') }}"> --}}
            @endif
            <br>
            <input type="submit" class="button button1" value="Submit">
        </form>
    </div>
</div>
