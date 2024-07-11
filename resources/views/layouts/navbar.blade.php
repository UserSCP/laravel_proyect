<nav>
    <ul class="sticky navbar" style="position: sticky">
        <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
        <li><a class="{{ request()->routeIs('products.index', 'products.create', 'products.edit') ? 'active' : '' }}"
                href="{{ route('products.index') }}">Productos</a></li>
        <li><a class="{{ request()->routeIs('categories.index', 'categories.create', 'categories.edit') ? 'active' : '' }}"
                href="{{ route('categories.index') }}">Categorías</a></li>
        <li><a class="{{ request()->routeIs('brands.index', 'brands.create', 'brands.edit') ? 'active' : '' }}"
                href="{{ route('brands.index') }}">Marca</a></li>
    </ul>
</nav>
