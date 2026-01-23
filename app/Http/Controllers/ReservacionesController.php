<?php

namespace App\Http\Controllers;

use App\Models\Reservaciones; // IMPORTANTE: Importar el modelo
use Illuminate\Http\Request;

class ReservacionesController extends Controller
{
    public function index()
    {
        $datos = Reservaciones::all();

        return view('/Admin/Historial_Reservaciones', ['reservaciones' => $datos]);
    }
    public function store(Request $request) 
    {

        \App\Models\Reservaciones::create($request->all());

        return redirect()->back()->with('mensaje', '¡Reserva guardada!');   
    }
}