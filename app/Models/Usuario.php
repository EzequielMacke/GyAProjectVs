<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'apellido',
        'titulacion_id',
        'cargo_id',
        'correo',
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
}