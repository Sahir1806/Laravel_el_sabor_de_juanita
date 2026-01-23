<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    public function index()
    {
        $datos = Promociones::all();

        return view('/Admin/Historial_Promociones', ['promociones' => $datos]);
    }
}
