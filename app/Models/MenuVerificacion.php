<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuVerificacion extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'nombre',
        'url',
        'fecha_publicación',
        'estado',
    ];
}