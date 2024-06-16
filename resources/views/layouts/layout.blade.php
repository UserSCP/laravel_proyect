<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <!-- Incluir estilos de Bootstrap u otros -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Estilos CSS personalizados -->
<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
<link href="{{ asset('css/table.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header') <!-- Incluir el encabezado -->

    @yield('content') <!-- Contenido dinámico de las vistas que extienden este layout -->

    @include('layouts.footer') <!-- Incluir el pie de página -->

    <!-- Bootstrap JS y otros scripts si es necesario -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
