<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialReservacion extends Model
{
    use HasFactory;

    protected $table = 'reservaciones';

    protected $fillable = [
        'nombre',
        'personas',
        'fecha',
        'hora',
        'telefono',
        'correo',
        'comentarios',
    ];
}