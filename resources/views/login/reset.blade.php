<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
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
                            <i class="bi bi-envelope-fill fs-1 text-primary"></i>
                            <h3 class="mt-2 mb-0">¿Olvidaste tu contraseña?</h3>
                        </div>
                        <div class="alert alert-info text-center mb-4">
                            Ingresa tu correo electrónico y te enviaremos un enlace seguro para restablecer tu contraseña. 
                            <br>
                            <span class="text-muted small">
                                Por motivos de seguridad, el enlace solo será válido por un tiempo limitado. 
                                Si no ves el correo en tu bandeja de entrada, revisa la carpeta de spam o correo no deseado.
                            </span>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success text-center">
                                {{ session('status') }}
                            </div>
                        @else
                        <form method="POST" action="#">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="usuario@ejemplo.com" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar instrucciones</button>
                        </form>
                        @endif
                        <div class="mt-3 text-center">
                            <a href="/login" class="text-decoration-none">Volver al inicio de sesión</a>
                        </div>
                    </div>
                </div>
                @include('partials.copy')  
            </div>
        </div>
    </div>
</body>
</html>