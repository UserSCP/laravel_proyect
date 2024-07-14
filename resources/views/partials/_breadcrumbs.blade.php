<br>
<nav class="navbar">    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$loop->last)
                <li class="breadcrumb-item fix-all"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
            @else
                <li class="breadcrumb-item active fix-all" aria-current="page">{{ $breadcrumb['name'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>
