<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservacionesController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HistorialPromociones;
use App\Http\Controllers\HistorialReservacionesController;
use App\Http\Controllers\MenuVerificacionController;
use App\Http\Controllers\HistorialBienvenidaController;
use App\Http\Controllers\BienvenidaController;


/*Promociones*/

Route::get('/Promociones', [PromocionesController::class, 'index'])->name('promociones.index'); /*Conexion Promociones*/
Route::get('/historial_promociones', [HistorialPromociones::class, 'index'])->name('historial_promociones.index'); /*Conexion*/
Route::post('/Historial_Promociones', [HistorialPromociones::class, 'store'])->name('Historial_Promociones.store'); /*Inserta los datos*/
Route::delete('/Historial_Promociones/{id}', [HistorialPromociones::class, 'destroy'])->name('Historial_Promociones.destroy'); /*Elimina los datos*/
Route::get('/Historial_Promociones/{id}/edit', [HistorialPromociones::class, 'edit'])->name('Historial_Promociones.edit'); /*Edita los datos*/
Route::put('/Historial_Promociones/{id}', [HistorialPromociones::class, 'update'])->name('Historial_Promociones.update'); /*Actualiza los datos al instante*/
Route::get('/historial_promociones', [HistorialPromociones::class, 'index'])->name('Historial_Promociones.index'); /*Mensaje que muestra el mensaje y el dato*/

Route::get('/prueba', [UsuarioController::class, 'index']);

/*Reservaciones*/

Route::post('/guardar-reserva', [ReservacionesController::class, 'store'])->name('reservaciones.store');
Route::post('/reservar', [ReservacionesController::class, 'store'])->name('reservaciones.store');
Route::get('/historial_reservaciones', [HistorialReservacionesController::class, 'index'])->name('Historial_Reservaciones.index');
Route::post('/historial_reservaciones', [HistorialReservacionesController::class, 'store'])->name('Historial_Reservaciones.store');
Route::get('/historial_reservaciones/{id}/edit', [HistorialReservacionesController::class, 'edit'])->name('Historial_Reservaciones.edit');
Route::put('/historial_reservaciones/{id}', [HistorialReservacionesController::class, 'update'])->name('Historial_Reservaciones.update');
Route::delete('/historial_reservaciones/{id}', [HistorialReservacionesController::class, 'destroy'])->name('Historial_Reservaciones.destroy');

/*Menu*/

Route::get('/menu', [MenuController::class, 'index'])->name('menu.publico');
Route::get('/menu_verificacion', [MenuVerificacionController::class, 'index'])->name('menu_verificacion.index');
Route::get('/menu_verificacion/create', [MenuVerificacionController::class, 'create'])->name('menu_verificacion.create');
Route::post('/menu_verificacion', [MenuVerificacionController::class, 'store'])->name('menu_verificacion.store');
Route::get('/menu_verificacion/{id}/edit', [MenuVerificacionController::class, 'edit'])->name('menu_verificacion.edit');
Route::put('/menu_verificacion/{id}', [MenuVerificacionController::class, 'update'])->name('menu_verificacion.update');
Route::delete('/menu_verificacion/{id}', [MenuVerificacionController::class, 'destroy'])->name('menu_verificacion.destroy');

/*Bienvenida*/

Route::get('/bienvenida', [BienvenidaController::class, 'index'])->name('bienvenida.publica');
Route::get('/historial_bienvenida', [HistorialBienvenidaController::class, 'index'])->name('historial_bienvenida.index');
Route::post('/historial_bienvenida', [HistorialBienvenidaController::class, 'store'])->name('historial_bienvenida.store');
Route::get('/historial_bienvenida/{id}/edit', [HistorialBienvenidaController::class, 'edit'])->name('historial_bienvenida.edit');
Route::put('/historial_bienvenida/{id}', [HistorialBienvenidaController::class, 'update'])->name('historial_bienvenida.update');
Route::delete('/historial_bienvenida/{id}', [HistorialBienvenidaController::class, 'destroy'])->name('historial_bienvenida.destroy');

Route::get('/no', function() {
    return view('/assets/header');
});

 
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/bienvenida', function() { 
    return view('/Public/Bienvenida'); 
});

Route::get('/menu',function() {
    return view('/Public/Menu');
});
/*
Route::get('/promociones',function() {
    return view('/Public/Promociones');
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

*/
Route::get('/reservaciones',function() {
    return view('/Public/Reservaciones');
});

Route::get('/portal', function() {
    return view('Admin/Portal');
});


Route::get('/prueba', function() {
    return view('/Prueba');
});


