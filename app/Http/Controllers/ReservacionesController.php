<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservaciones;

class ReservacionesController extends Controller
{
    public function store(Request $request)
    {
        Reservaciones::create($request->all());

        return redirect()->back()->with('success', '¡Reservación guardada correctamente!');
    }
}