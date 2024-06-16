<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
</head>

<body>
    @include('layouts.header') <!-- Incluir el encabezado -->

    @yield('content') <!-- Contenido dinámico de las vistas que extienden este layout -->

    @include('layouts.footer') <!-- Incluir el pie de página -->

    <!-- Bootstrap JS y otros scripts si es necesario -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VGpS1XMOeUT3JN6s1oPPrfo1Dw6vQ+l9aR2B+ApKjRDO0jvV2+cmnq0NlgJwvn9V" crossorigin="anonymous"></script>
</body>

</html>
