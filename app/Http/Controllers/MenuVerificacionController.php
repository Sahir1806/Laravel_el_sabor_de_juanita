<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuVerificacion;

class MenuVerificacionController extends Controller
{
    public function index()
    {
        $menus = MenuVerificacion::all();
        return view('Admin.Menu_Verificacion', compact('menus'));
    }

    public function store(Request $request)
    {
        MenuVerificacion::create($request->all());
        return redirect()->route('Menu_Verificacion.index')->with('success', 'Menú guardado correctamente');
    }

    public function destroy($id)
    {
        $menu = MenuVerificacion::findOrFail($id);
        $menu->delete();
        return redirect()->route('Menu_Verificacion.index')->with('success', 'Menú eliminado correctamente');
    }
}