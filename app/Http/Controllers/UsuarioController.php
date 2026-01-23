<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // IMPORTANTE: Importar el modelo
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $datos = Usuario::all();

        return view('Prueba', ['usuarios' => $datos]);
    }
}