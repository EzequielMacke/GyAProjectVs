<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    @include('partials.head')
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="bi bi-person-circle fs-1 text-primary"></i>
                            <h3 class="mt-2 mb-0">Iniciar sesión</h3>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="usuario@ejemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                            <span class="mx-2 text-muted">|</span>
                            <a href="#" class="text-decoration-none">Registrarme</a>
                        </div>
                    </div>
                </div>
                @include('partials.copy')  
            </div>
        </div>
    </div>
</body>
</html>