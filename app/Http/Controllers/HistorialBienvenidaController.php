<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historial_Bienvenida;

class HistorialBienvenidaController extends Controller
{
    public function index()
    {
        $bienvenidas = Historial_Bienvenida::all();
        return view('Admin.Historial_Bienvenida', compact('bienvenidas'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/bienvenidas'), $filename);
            $data['imagen'] = 'images/bienvenidas/' . $filename;
        }

        Historial_Bienvenida::create($data);

        return redirect()->route('historial_bienvenida.index')->with('success', 'Bienvenida guardada correctamente');
    }

    public function edit($id)
    {
        $bienvenida = Historial_Bienvenida::findOrFail($id);
        $bienvenidas = Historial_Bienvenida::all();
        return view('admin.Historial_Bienvenida', compact('bienvenida', 'bienvenidas'));
    }

    public function update(Request $request, $id)
    {
        $bienvenida = Historial_Bienvenida::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/bienvenidas'), $filename);
            $data['imagen'] = 'images/bienvenidas/' . $filename;
        }

        $bienvenida->update($data);

        return redirect()->route('historial_bienvenida.index')->with('success', 'Bienvenida actualizada correctamente');
    }

    public function destroy($id)
    {
        $bienvenida = Historial_Bienvenida::findOrFail($id);
        $bienvenida->delete();
        return redirect()->route('historial_bienvenida.index')->with('success', 'Bienvenida eliminada correctamente');
    }
}