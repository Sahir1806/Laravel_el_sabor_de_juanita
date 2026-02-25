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
            
            // Asegurar que la carpeta existe
            $path = public_path('images/imagenes_promo');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            $file->move($path, $filename);
            $data['imagen'] = 'images/imagenes_promo/' . $filename;
        }

        Historial_Promociones::create($data);

        // CORREGIDO: Usar el nombre exacto de la ruta
        return redirect()->route('Historial_Promociones.index')->with('success', 'Promoción guardada correctamente');
    }

    // Editar promoción
    public function edit($id)
    {
        $promo = Historial_Promociones::findOrFail($id);
        return view('Admin.Editar_Promocion', compact('promo'));
    }

    // Actualizar promoción
    public function update(Request $request, $id)
    {
        $promo = Historial_Promociones::findOrFail($id);
        $data = $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'descuento' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior
            if ($promo->imagen && file_exists(public_path($promo->imagen))) {
                unlink(public_path($promo->imagen));
            }
            
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/imagenes_promo'), $filename);
            $data['imagen'] = 'images/imagenes_promo/' . $filename;
        }

        $promo->update($data);

        // CORREGIDO: Usar el nombre exacto de la ruta
        return redirect()->route('Historial_Promociones.index')->with('success', 'Promoción actualizada correctamente.');
    }

    // Eliminar promoción
    public function destroy($id)
    {
        $promo = Historial_Promociones::findOrFail($id);
        
        // Eliminar imagen física
        if ($promo->imagen && file_exists(public_path($promo->imagen))) {
            unlink(public_path($promo->imagen));
        }
        
        $promo->delete();

        // CORREGIDO: Usar el nombre exacto de la ruta
        return redirect()->route('Historial_Promociones.index')->with('success', 'Promoción eliminada correctamente.');
    }
}