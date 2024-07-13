<div style="margin-left: 20px; margin-right:20px;">
    <table class="table">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th>{{ $column }}</th>
                @endforeach
                <th>{{ __('fields.table.edit') }}</th>
                <th>{{ __('fields.table.delete') }}</th>
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>