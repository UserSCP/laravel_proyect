<form method="GET" style=""  action="{{ route('categories.index') }}">
    <label for="parent_id">{{ __('fields.table.category.filter_category.label') }}</label>
    <select name="parent_id" id="parent_id" onchange="this.form.submit()">
        <option value="">{{ __('fields.table.category.filter_category.first_choice') }}</option>
        @foreach($parentCategories as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</form>
</div>
