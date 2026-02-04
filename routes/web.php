<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservacionesController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HistorialPromociones;
use App\Http\Controllers\HistorialReservacionesController;
use App\Http\Controllers\MenuVerificacionController;



Route::get('/Promociones', [PromocionesController::class, 'index'])->name('promociones.index'); /*Conexion Promociones*/




Route::get('/historial_promociones', [HistorialPromociones::class, 'index'])->name('historial_promociones.index'); /*Conexion*/
Route::post('/Historial_Promociones', [HistorialPromociones::class, 'store'])->name('Historial_Promociones.store'); /*Inserta los datos*/
Route::delete('/Historial_Promociones/{id}', [HistorialPromociones::class, 'destroy'])->name('Historial_Promociones.destroy'); /*Elimina los datos*/
Route::get('/Historial_Promociones/{id}/edit', [HistorialPromociones::class, 'edit'])->name('Historial_Promociones.edit'); /*Edita los datos*/
Route::put('/Historial_Promociones/{id}', [HistorialPromociones::class, 'update'])->name('Historial_Promociones.update'); /*Actualiza los datos al instante*/
Route::get('/historial_promociones', [HistorialPromociones::class, 'index'])->name('Historial_Promociones.index'); /*Mensaje que muestra el mensaje y el dato*/

Route::get('/prueba', [UsuarioController::class, 'index']);


Route::get('/historial_reservaciones', [ReservacionesController::class, 'index']);
Route::post('/guardar-reserva', [ReservacionesController::class, 'store'])->name('reservaciones.store');
Route::post('/reservar', [ReservacionesController::class, 'store'])->name('reservaciones.store');
Route::get('/Historial_Reservaciones', [ReservacionesController::class, 'historial'])->name('reservaciones.historial');
Route::get('/historial_reservaciones', [HistorialReservacionesController::class, 'index'])->name('Historial_Reservaciones.index');
Route::resource('Historial_Reservaciones', HistorialReservacionesController::class)->only([
    'index', 'store', 'destroy']);

Route::get('/menu_verificacion', [MenuController::class, 'index']);
Route::resource('Menu_Verificacion', MenuVerificacionController::class)->only([
    'index', 'store', 'destroy'
]);

Route::get('/no', function() {
    return view('/assets/header');
});







Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', function() { 
    return view('/Public/Bienvenida'); 
});

Route::get('/menu',function() {
    return view('/Public/Menu');
});
/*
Route::get('/promociones',function() {
    return view('/Public/Promociones');
});
*/
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


