<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud en proceso</title>
    @include('partials.head')
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5 text-center">
                        <i class="bi bi-hourglass-split display-1 text-primary mb-3"></i>
                        <h2 class="mb-3">¡Solicitud en proceso!</h2>
                        <p class="mb-4 text-secondary">
                            Tu solicitud de cuenta está siendo procesada por nuestro equipo.<br>
                            Te enviaremos un correo electrónico cuando tu cuenta esté lista para usarse.<br>
                            <br>
                            Por favor, ten paciencia. Este proceso puede demorar algunos minutos.
                        </p>
                        <div class="mb-3">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Procesando...</span>
                            </div>
                        </div>
                        <p class="mb-0 text-muted" style="font-size: 0.95rem;">
                            Si tienes dudas, puedes contactarnos a <a href="mailto:soporte@miapp.com" class="text-decoration-none">soporte@miapp.com</a>
                        </p>
                    </div>
                </div>
                @include('partials.copy')  
            </div>
        </div>
    </div>
</body>
</html>