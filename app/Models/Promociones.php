<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    protected $table = 'promociones';

    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'descuento',
        'fecha_inicio',
        'fecha_fin',
    ];
}
