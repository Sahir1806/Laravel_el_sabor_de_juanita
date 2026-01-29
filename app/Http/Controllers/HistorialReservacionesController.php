<?php

namespace App\Http\Controllers;

use App\Models\HistorialReservacion;
use Illuminate\Http\Request;

class HistorialReservacionesController extends Controller
{
    public function index()
    {
        $reservaciones = HistorialReservacion::all();
        return view('Admin/Historial_Reservaciones', compact('reservaciones'));
    }

    public function store(Request $request)
    {
        HistorialReservacion::create($request->all());
        return redirect()->route('Historial_Reservaciones.index')->with('success', 'Reservación guardada correctamente');
    }

    public function destroy($id)
    {
        $reserva = HistorialReservacion::findOrFail($id);
        $reserva->delete();
        return redirect()->route('Historial_Reservaciones.index')->with('success', 'Reservación eliminada correctamente');
    }
}