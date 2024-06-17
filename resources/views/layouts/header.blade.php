<ul>
  <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
  <li><a class="{{ request()->is('products') ? 'active' : '' }}" href="{{ route('products.index') }}">Productos</a></li>
  <li><a class="{{ request()->is('categories') ? 'active' : '' }}" href="{{ route('categories.index') }}">Categorias</a></li>
  <li><a class="{{ request()->is('brands') ? 'active' : '' }}" href="{{ route('brands.index') }}">Marca</a></li>
</ul>
