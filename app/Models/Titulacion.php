<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Titulacion extends Model
{
    protected $table = 'titulaciones';

    protected $fillable = [
        'descripcion',
    ];
}
