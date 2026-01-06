<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'apellido',
        'titulacion_id',
        'cargo_id',
        'email',
        'password',
        'estado_id',
        'sucursal_id',
        'nacimiento',
    ];

    // Relaciones
    public function titulacion()
    {
        return $this->belongsTo(Titulacion::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function getAuthIdentifierName()
    {
        return 'email';
    }
}