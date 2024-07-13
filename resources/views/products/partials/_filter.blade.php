
    <form method="GET" action="{{ route('products.index') }}">
        <label for="sort_price">{{ __('fields.table.product.filter_price.label') }}</label>
        <select name="sort_price" id="sort_price" class="select" onchange="this.form.submit()">
            <option value="" {{ request('sort_price') == '' ? 'selected' : '' }}>{{ __('fields.table.product.filter_price.first_choice') }}</option>
            <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>{{ __('fields.table.product.filter_price.option.option2') }}</option>
            <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>{{ __('fields.table.product.filter_price.option.option1') }}</option>
        </select>
    </form>
</div>
