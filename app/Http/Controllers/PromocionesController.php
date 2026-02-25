<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    public function index()
    {

    $promociones = Promociones::all();
    return view('Public.Promociones', compact('promociones'));
    
    }
}
