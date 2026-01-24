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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'personas' => 'required|integer',
            'fecha' => 'required|date',
            'hora' => 'required',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email',
            'comentarios' => 'nullable|string',
        ]);

            Reservaciones::create($request->all());

    return redirect()->route('reservaciones.historial')
                     ->with('success', '¡Reservación guardada correctamente!');

        Reservaciones::create($request->all());

        return redirect()->route('reservaciones.historial');
    }

    public function historial()
    {
        $reservaciones = Reservaciones::latest()->get();
        return view('Public/Reservaciones', compact('reservaciones'));
    }


}