<div>
    <br>
    <a href="{{ $route }}"><button class="button button1">@yield('button')</button></a>
    <h3>
        @yield('title')
    </h3>
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
    <table class="table">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th>{{ $column }}</th>
                @endforeach
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>