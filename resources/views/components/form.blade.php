@props(['route', 'title', 'fields', 'object' => null])

<h2 style="text-align: center">{{ $title }}</h2>

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

                @elseif ($field['type'] == 'checkbox-group')
                    <label>{{ $field['label'] }}</label>
                    <div>
                        @foreach ($field['options'] as $optionValue => $optionName)
                            <input type="checkbox" name="{{ $field['name'] }}[]" value="{{ $optionValue }}"
                                {{ in_array($optionValue, old($field['name'], $object ? $object->categories->pluck('id')->toArray() : [])) ? 'checked' : '' }}
                                id="{{ $field['name'] . '_' . $optionValue }}">
                            <label for="{{ $field['name'] . '_' . $optionValue }}">{{ $optionName }}</label>
                        @endforeach
                    </div>
                    @error($field['name'])
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                @endif
                <br>
            @endforeach

            <input type="submit" class="button button1" value="Submit">
        </form>
    </div>
</div>
