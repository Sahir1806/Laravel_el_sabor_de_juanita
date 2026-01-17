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
    return view('Admin/Portal');
});

Route::get('/historial_bienvenida', function() {
    return view('Admin/Historial_Bienvenida');
}); 

Route::get('/historial_promociones', function() {
    return view('Admin/Historial_Promociones');
});

Route::get('/historial_reservaciones', function() {
    return view('Admin/Historial_Reservaciones');
});

Route::get('/menu_verificacion', function() {
    return view('Admin/Menu_Verificacion');
});