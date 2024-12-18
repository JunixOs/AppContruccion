<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest'); //Solo los no autenticados pueden acceder a esta ruta

Auth::routes(); //Genera las rutas para la autenticacion 'login', cerrar sesion, registrarse, verificar etc.

Route::get('/prendas/misprendas',[App\Http\Controllers\PrendaController::class, 'redirect'])->middleware('auth')->name('redirect');
Route::get('/juguetes/misjuguetes',[App\Http\Controllers\JugueteController::class, 'redireccionar'])->middleware('auth')->name('redirect-misjuguetes');
Route::get('/eliminar-prenda/{id}',[App\Http\Controllers\PrendaController::class, 'confirmation'])->name('confirmacion'); //Paso el id a la funcion de este modo
Route::get('/eliminar-juguete/{id}',[App\Http\Controllers\JugueteController::class, 'confirmation'])->name('confirmacion-juguetes');
Route::resource('prendas', App\Http\Controllers\PrendaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::view('/principal','home')->middleware('auth')->name('principal');
//Route::view('/sobre_nosotros', 'aboutus')->name('aboutus');
Route::resource('juguetes', App\Http\Controllers\JugueteController::class)->middleware('auth'); //Me permite acceder a los metodos de la funcion controladora

Route::get('/eliminar-usuario/{id}',[App\Http\Controllers\UserController::class, 'confirmate'])->middleware('auth')->name('borrar-usuario');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth'); //

Route::get('image-juguete/{id}',[App\Http\Controllers\JugueteController::class, 'image']);
Route::get('image-prenda/{id}', [App\Http\Controllers\PrendaController::class, 'image']); //ruta hacia la imagen, es unico debido al ID, esto activa la funcion 'image'
Route::get('image-user/{id}',[App\Http\Controllers\UserController::class, 'image']);
Route::view('/ods','ODS')->name('ODS');
Route::view('/objetivo-app','objetivodelproyecto')->name('objetivo-proyecto');

