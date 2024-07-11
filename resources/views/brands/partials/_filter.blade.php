    <form method="GET" action="{{ route('brands.index') }}">
        <label for="sort_name">Ordenar por nombre:</label>
        <select name="sort_name" id="sort_name" class="select" onchange="this.form.submit()">
            <option value="" {{ request('sort_name') == '' ? 'selected' : '' }}>Seleccione una opción</option>
            <option value="asc" {{ request('sort_name') == 'asc' ? 'selected' : '' }}>A a Z</option>
            <option value="desc" {{ request('sort_name') == 'desc' ? 'selected' : '' }}>Z a A</option>
        </select>
    </form>
</div>