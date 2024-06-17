<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
<link href="{{ asset('css/table.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header') 

    @yield('content') 

    @include('layouts.footer') 

</body>

</html>
