<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    @include('partials.head')
    <style>
        input:required {
            border-left: 4px solid #dc3545 !important;
        }
        input:required:focus {
            box-shadow: 0 0 0 0.2rem rgba(220,53,69,.15);
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="bi bi-person-plus-fill fs-1 text-primary"></i>
                            <h3 class="mt-2 mb-0">Registrarse</h3>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Nombres</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="nombre1" required aria-label="Primer nombre" >
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="nombre2" aria-label="Segundo nombre (opcional)" >
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellidos</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="apellido1" required aria-label="Primer apellido" >
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="apellido2" aria-label="Segundo apellido (opcional)">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="usuario@ejemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" placeholder="Repite la contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrarme</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="/login" class="text-decoration-none">¿Ya tienes cuenta? Inicia sesión</a>
                        </div>
                    </div>
                </div>
                @include('partials.copy')  
            </div>
        </div>
    </div>
</body>
</html>