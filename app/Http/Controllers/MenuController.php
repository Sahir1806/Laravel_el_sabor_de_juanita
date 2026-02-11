<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('estado', 1)->get();
        return view('Public.Menu', compact('menus'));
    }
}