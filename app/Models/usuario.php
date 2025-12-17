<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'nombre',
        'password',
        'correo',
    ];

    /**   
     * The attributes that should be hidden for serialization
     * 
     *  @var list<string>  
    */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast
     * 
     * @var array<string, string>
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

}
