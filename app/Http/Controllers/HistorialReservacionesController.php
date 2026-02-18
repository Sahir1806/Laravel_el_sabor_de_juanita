<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialReservacion;

class HistorialReservacionesController extends Controller
{
    public function index()
    {
        $reservaciones = HistorialReservacion::all();
        return view('Admin.Historial_Reservaciones', compact('reservaciones'));
    }

    public function store(Request $request)
    {
        HistorialReservacion::create($request->all());
        return redirect()->route('Historial_Reservaciones.index')
                         ->with('success', 'Reservación guardada correctamente');
    }

    public function edit($id)
    {
        $reservacion = HistorialReservacion::findOrFail($id);
        $reservaciones = HistorialReservacion::all();
        return view('Admin.Historial_Reservaciones', compact('reservacion','reservaciones'));
    }

    public function update(Request $request, $id)
    {
        $reservacion = HistorialReservacion::findOrFail($id);
        $reservacion->update($request->all());
        return redirect()->route('Historial_Reservaciones.index')
                         ->with('success', 'Reservación actualizada correctamente');
    }

    public function destroy($id)
    {
        $reserva = HistorialReservacion::findOrFail($id);
        $reserva->delete();
        return redirect()->route('Historial_Reservaciones.index')
                         ->with('success', 'Reservación eliminada correctamente');
    }
}