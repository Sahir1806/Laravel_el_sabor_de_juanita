<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialPromociones extends Model
{
    protected $table = 'promociones';

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'enlace',
        'fecha_inicio',
        'fecha_fin',
        'estado',
    ];

}
