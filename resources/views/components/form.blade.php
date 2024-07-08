@props(['route', 'title', 'fields', 'object' => null])
<div style="margin-left:20px">
<h2 style="text-align: center">{{ $title }}</h2>
</div>
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

<div class="container">
    <div class="div">
        <form action="{{ $route }}" method="POST" class="form">
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
                           autocomplete="off">
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

                @elseif ($field['type'] == 'checkbox-group'&&isset($object))
                    <label>{{ $field['label'] }}</label><br>
                    @foreach($field['options'] as $value => $label)
                        <input type="checkbox" name="categories[]" value="{{ $value }}" {{ in_array($value, $object->categories->pluck('id')->toArray()) ? 'checked' : '' }}> {{ $label }}                   
                        @endforeach
                @elseif ($field['type'] == 'checkbox-group'&& !isset($object))
                <label>{{ $field['label'] }}</label><br>
                @php
                    $selectedIds = old('categories', isset($object) ? $object->categories->pluck('id')->toArray() : []);
                @endphp
                @foreach($field['options'] as $value => $label)
                   
                <input type="checkbox" name="categories[]" value="{{ $value }}" {{ in_array($value, $selectedIds) ? 'checked' : '' }}> {{ $label }}
                
                @endforeach
                @endif
                <br>
            @endforeach
<br>
            <input type="submit" class="button button1" value="Submit">
        </form>
    