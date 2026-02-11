<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_Bienvenida extends Model
{
    use HasFactory;

    // Apunta a la tabla existente en MySQL
    protected $table = 'bienvenida';

    protected $fillable = [
        'imagen',
        'estado',
    ];

    // Desactivar timestamps porque la tabla no tiene created_at/updated_at
    public $timestamps = false;
}