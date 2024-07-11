<form method="GET" style=""  action="{{ route('categories.index') }}">
    <label for="parent_id">Filtrar por Categoría Padre:</label>
    <select name="parent_id" id="parent_id" onchange="this.form.submit()">
        <option value="">Selecciona una categoría</option>
        @foreach($parentCategories as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</form>
</div>
