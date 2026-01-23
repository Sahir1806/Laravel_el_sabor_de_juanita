<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservacionesController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', function() { 
    return view('/Public/Bienvenida'); 
});

Route::get('/menu',function() {
    return view('/Public/Menu');
});

Route::get('/promociones',function() {
    return view('/Public/Promociones');
});

Route::get('/reservaciones',function() {
    return view('/Public/Reservaciones');
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

Route::get('/prueba', function() {
    return view('/Prueba');
});

Route::get('/prueba', [UsuarioController::class, 'index']);
Route::get('/historial_reservaciones', [ReservacionesController::class, 'index']);
Route::get('/historial_promociones', [PromocionesController::class, 'index']);
Route::get('/menu_verificacion', [MenuController::class, 'index']);
Route::post('/guardar-reserva', [ReservacionesController::class, 'store'])->name('reservas.store');

Route::get('/no', function() {
    return view('/assets/header');
});