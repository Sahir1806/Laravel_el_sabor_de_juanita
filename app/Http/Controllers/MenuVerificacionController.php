<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuVerificacionController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.Menu_Verificacion', compact('menus'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            // Guardar en public/images/imagenes_menu
            $file->move(public_path('images/imagenes_menu'), $filename);
            $data['imagen'] = 'images/imagenes_menu/' . $filename;
        }

        Menu::create($data);

        return redirect()->route('menu_verificacion.index')->with('success', 'Menú guardado correctamente');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $menus = Menu::all();
        return view('admin.Menu_Verificacion', compact('menu', 'menus'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/imagenes_menu'), $filename);
            $data['imagen'] = 'images/imagenes_menu/' . $filename;
        }

        $menu->update($data);

        return redirect()->route('menu_verificacion.index')->with('success', 'Menú actualizado correctamente');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu_verificacion.index')->with('success', 'Menú eliminado correctamente');
    }
}