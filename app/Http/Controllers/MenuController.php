<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $datos = Menu::all();
        return view('/Admin/Menu_Verificacion', ['menus' => $datos]);
    }
}
