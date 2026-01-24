<?php

namespace App\Http\Controllers;

use App\Models\HistorialPromocion;
use Illuminate\Http\Request;

class HistorialPromocionesController extends Controller
{
    public function index()
    {
        $datos = HistorialPromocion::all();
        return view('Admin.Historial_Promociones', ['promociones' => $datos]);
    }

    public function create()
    {
        return view('Admin.Historial_Promociones');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Titulo' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'Imagen' => 'nullable|string',
            'enlace' => 'nullable|string',
            'Fecha_inicio' => 'required|date',
            'Fecha_fin' => 'required|date',
            'Estado' => 'required|string',
        ]);

        HistorialPromocion::create([
            'titulo' => $request->Titulo,
            'descripcion' => $request->Descripcion,
            'imagen' => 'images/' . $request->Imagen,
            'enlace' => $request->enlace,
            'fecha_inicio' => $request->Fecha_inicio,
            'fecha_fin' => $request->Fecha_fin,
            'estado' => $request->Estado,
        ]);

        return redirect()->route('historial_promociones.index')
                         ->with('success', '¡Promoción guardada correctamente!');
    }
}


