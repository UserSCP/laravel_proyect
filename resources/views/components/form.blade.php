@props(['route', 'title', 'fields', 'object' => null, 'buttonSubmit'])


@if ($errors->any())
    <div class="container">
        @foreach ($errors->all() as $error)
            <div class="alert4">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ $error }}
            </div>
            <br>
        @endforeach
    </div>
@endif

<div class="container" style="margin-top: 20px">
    <div class="div">
        <div style="">
            <h2 style="">{{ $title }}</h2>
        </div>
        
        <form action="{{ $route }}" method="POST" class="">
            @csrf
            @if (isset($object))
                @method('PUT')
            @endif
            @foreach ($fields as $field)
                @if ($field['type'] == 'text')
                    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           class="form-control @error($field['name']) is-invalid @enderror"
                           value="{{ old($field['name'], $object->{$field['name']} ?? '') }}"
                           autocomplete="off" placeholder="{{ $field['placeholder'] }}">
                    @error($field['name'])
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                @elseif ($field['type'] == 'select')
                    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control @error($field['name']) is-invalid @enderror">
                        @foreach ($field['options'] as $optionValue => $optionName)
                            <option value="{{ $optionValue }}"
                                    {{ old($field['name'], $object->{$field['name']} ?? '') == $optionValue ? 'selected' : '' }}>
                                {{ $optionName }}
                            </option>
                        @endforeach
                    </select>
                    @error($field['name'])
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                @elseif ($field['type'] == 'checkbox-group')
                    <label>{{ $field['label'] }}</label><br><br>
                    @php
                        $selectedIds = old('categories', isset($object) ? $object->categories->pluck('id')->toArray() : []);
                    @endphp
                    @foreach($field['options'] as $value => $label)
                        <input type="checkbox" name="categories[]" value="{{ $value }}" {{ in_array($value, $selectedIds) ? 'checked' : '' }}> {{ $label }}
                    @endforeach
                @endif
                <br>
            @endforeach
            <br><br><br>
            <div class="form-group">
                <button type="submit" class="{{ request()->routeIs('products.create', 'categories.create', 'brands.create') ? 'button button1' : 'button button2' }}">{{ $buttonSubmit }}</button>
            </div>
        </form>
    </div>
</div>
