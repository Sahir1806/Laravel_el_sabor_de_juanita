<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', function() { 
    return view('Bienvenida'); 
});

Route::get('/menu',function() {
    return view('Menu');
});

Route::get('/promociones',function() {
    return view('Promociones');
});

Route::get('/reservaciones',function() {
    return view('Reservaciones');
});

Route::get('/portal', function() {
    return view('Portal');
});

Route::get('/historial_Bienvenida', function() {
    return view('Historial_Bienvenida');
}); 

Route::get('/historial_Promociones', function() {
    return view('Historial_Promociones');
});

Route::get('/historial_Reservaciones', function() {
    return view('Historial_Reservaciones');
});

Route::get('/Menu_Verificacion', function() {
    return view('Menu_Verificacion');
});