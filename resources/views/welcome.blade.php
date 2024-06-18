<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    
<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">

</head>
<body>
    @include('layouts.header')
    <div class="container mt-4">
        <h1>Bienvenido a Laravel</h1>
    </div>
    @include('layouts.footer')
</body>
</html>