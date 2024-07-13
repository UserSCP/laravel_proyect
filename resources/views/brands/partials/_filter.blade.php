    <form method="GET" action="{{ route('brands.index') }}">
        <label for="sort_name">{{ __('fields.table.brand.filter_alfa.label') }}</label>
        <select name="sort_name" id="sort_name" class="select" onchange="this.form.submit()">
            <option value="" {{ request('sort_name') == '' ? 'selected' : '' }}>{{ __('fields.table.brand.filter_alfa.first_choice') }}</option>
            <option value="asc" {{ request('sort_name') == 'asc' ? 'selected' : '' }}>{{ __('fields.table.brand.filter_alfa.option.option1') }}</option>
            <option value="desc" {{ request('sort_name') == 'desc' ? 'selected' : '' }}>{{ __('fields.table.brand.filter_alfa.option.option2') }}</option>
        </select>
    </form>
</div>