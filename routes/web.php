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