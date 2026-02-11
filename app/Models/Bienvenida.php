<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bienvenida extends Model
{
    protected $table = 'bienvenida';

    protected $fillable = [
        'imagen',
        'estado',
    ];

    public $timestamps = false; // tu tabla no tiene created_at/updated_at
}