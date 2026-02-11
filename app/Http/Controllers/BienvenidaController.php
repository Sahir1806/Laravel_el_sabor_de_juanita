<?php

namespace App\Http\Controllers;

use App\Models\Bienvenida;

class BienvenidaController extends Controller
{
    public function index()
    {
        // Traer todas las imágenes activas
        $bienvenidas = Bienvenida::where('estado', 1)->get();
        return view('Public.Bienvenida', compact('bienvenidas'));
    }
}