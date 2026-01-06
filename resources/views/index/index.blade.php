<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    @include('partials.head')
</head>
<body class="bg-light d-flex flex-column min-vh-100" style="margin:0;">
    @include('partials.header')
    @include('partials.navbar')

    <!-- Contenido principal -->
    <div id="mainContent" class="container py-5 flex-grow-1">
        <div class="card shadow-sm p-4 mt-3 w-100" style="max-width: 400px; margin: auto;">
            <h1 class="mb-3 text-center">¡Bienvenido!</h1>
            <p class="text-center mb-4">Has iniciado correctamente tu proyecto Laravel.<br>¡Comienza a desarrollar tu aplicación!</p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="https://laravel.com/docs" target="_blank" class="btn btn-primary btn-sm mb-2">Documentación</a>
                <a href="https://laracasts.com" target="_blank" class="btn btn-outline-secondary btn-sm mb-2">Laracasts</a>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>