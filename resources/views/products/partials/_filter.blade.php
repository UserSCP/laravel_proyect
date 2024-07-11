
    <form method="GET" action="{{ route('products.index') }}">
        <label for="sort_price">Ordenar por precio:</label>
        <select name="sort_price" id="sort_price" class="select" onchange="this.form.submit()">
            <option value="" {{ request('sort_price') == '' ? 'selected' : '' }}>Seleccione una opción</option>
            <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>Menor a mayor</option>
            <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>Mayor a menor</option>
        </select>
    </form>
</div>
