<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus'; // apunta a la tabla correcta

    protected $fillable = [
        'nombre',
        'imagen',
        'fecha_publicación',
        'estado',
    ];
}
