<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    public function index()
    {
    //return 'hola';
    $promociones = Promociones::all();
        //dd($promociones->toJson());
        return view('Public/Promociones', compact('promociones'));
    }
}
