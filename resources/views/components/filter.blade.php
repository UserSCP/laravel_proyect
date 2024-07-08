@props(['action', 'filters'])

<div class="filter-container">
    <form method="GET" action="{{ $action }}">
        @foreach ($filters as $filter)
            <label for="{{ $filter['name'] }}">{{ $filter['label'] }}</label>
            <select name="{{ $filter['name'] }}" id="{{ $filter['name'] }}" onchange="this.form.submit()">
                @foreach ($filter['options'] as $value => $label)
                    <option value="{{ $value }}" {{ request($filter['name']) == $value ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        @endforeach
    </form>
</div>
