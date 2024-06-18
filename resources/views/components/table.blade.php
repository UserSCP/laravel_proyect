
<a href="{{ $route }}"><button class="button button1">@yield('bottun')</button></a>
<h3>
@yield('title')
</h3>
@if (session('delete'))
<div class="container">
    <div class="alert1">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('delete') }}
    </div>
</div>
@endif
@if (session('create'))
<div class="container">
    <div class="alert2">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('create') }}
    </div>
</div>
@endif
@if (session('edit'))
<div class="container">
    <div class="alert3">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('edit') }}
    </div>
</div>
@endif
@if (session('error'))
<div class="container">
    <div class="alert6">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('error') }}
    </div>
</div>
@endif
<br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            @if ($route == route('categories.create'))
                <th>Parent_id</th>
            @endif
            <th>Name</th>
            @if ($route == route('products.create'))
                <th>Price</th>
            @endif
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
