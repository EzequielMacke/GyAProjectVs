<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso denegado</title>
    @include('partials.head')
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5 text-center">
                        <i class="bi bi-person-x-fill display-1 text-danger mb-3"></i>
                        <h2 class="mb-3 text-danger">Usuario suspendido</h2>
                        <p class="mb-4 text-secondary">
                            Tu cuenta ha sido suspendida y no puedes acceder al sistema.<br>
                            Si crees que esto es un error o necesitas más información,<br>
                            por favor contacta al equipo de soporte.
                        </p>
                        <a href="mailto:soporte@miapp.com" class="btn btn-outline-primary">
                            <i class="bi bi-envelope-at me-2"></i>Contactar soporte
                        </a>
                    </div>
                </div>
                @include('partials.copy')
            </div>
        </div>
    </div>
</body>
</html>