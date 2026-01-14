<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Reservaciones extends Model
{
    protected $table = "reservaciones";
    protected $fillable = ['nombre', 'personas', 'fecha','comentarios','telefono', 'correo'];
}




