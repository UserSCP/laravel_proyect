<br>
<a href="{{ $route }}"><button class="button button1">@yield('bottun')</button></a>
<h3>
    @yield('title')
</h3>
@php
    $alerts = [
        'delete' => 'alert1',
        'edit' => 'alert3',
        'create' => 'alert2',
        'error' => 'alert6',
    ];
@endphp

@foreach ($alerts as $key => $alertClass)
    @if (session($key))
        <div class="container">
            <div class="{{ $alertClass }}">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session($key) }}
            </div>
        </div>
    @endif
@endforeach
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
                <th>Brand_id</th>
                <th>Categories</th>
            @endif
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
