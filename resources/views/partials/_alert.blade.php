@php
    $alerts = [
        'delete' => 'alert1',
        'edit' => 'alert3',
        'create' => 'alert2',
        'error' => 'alert6',
    ];
@endphp
@foreach ($alerts as $key => $alertClass)
    @if (session($key))
        <div class="container">
            <div class="{{ $alertClass }}">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session($key) }}
            </div>
        </div>
    @endif
@endforeach
