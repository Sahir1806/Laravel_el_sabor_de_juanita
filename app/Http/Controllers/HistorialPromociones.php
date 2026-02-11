<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Historial_Promociones;

class HistorialPromociones extends Controller
{
    // Mostrar todas las promociones
    public function index()
    {
        $promociones = Historial_Promociones::all();
        return view('Admin.Historial_Promociones', compact('promociones'));
    }

    // Guardar nueva promoción
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/imagenes_promo'), $filename);
            $data['imagen'] = 'images/imagenes_promo/' . $filename;
        }

        Historial_Promociones::create($data);

        return redirect()->route('Historial_Promociones.index')->with('success', 'Promocion guardada correctamente');
    }

    // Eliminar promoción
    public function destroy($id)
    {
        $promo = Historial_Promociones::findOrFail($id);
        $promo->delete();

        return redirect()->route('Historial_Promociones.index')->with('success', 'Promoción eliminada correctamente.');
    }

    // Editar promoción (mostrar formulario de edición)
    public function edit($id)
    {
        $promo = Historial_Promociones::findOrFail($id);
        return view('Admin/Editar_Promocion', compact('promo'));
    }

    // Actualizar promoción
    public function update(Request $request, $id)
    {
        $promo = Historial_Promociones::findOrFail($id);

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'descuento' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        if ($request->hasFile('imagen')) {
            $imagenNombre = time() . '.' . $request->imagen->extension();
            $request->imagen->move(public_path('promociones'), $imagenNombre);
            $promo->imagen = $imagenNombre;
        }

        $promo->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'descuento' => $request->descuento,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('Historial_Promociones.index')->with('success', 'Promoción actualizada correctamente.');
    }
}