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
});

Auth::routes();

Route::get('/prendas/misprendas',[App\Http\Controllers\PrendaController::class, 'redirect'])->middleware('auth')->name('redirect');
Route::get('/eliminar/{id}',[App\Http\Controllers\PrendaController::class, 'confirmation'])->name('confirmacion'); //Paso el id a la funcion de este modo
Route::resource('prendas', App\Http\Controllers\PrendaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/principal','home')->middleware('auth')->name('principal');
Route::view('/sobre_nosotros', 'aboutus')->name('aboutus');

Route::get('/eliminar-usuario/{id}',[App\Http\Controllers\UserController::class, 'confirmate'])->name('borrar-usuario');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth'); //

Route::get('image/{id}', [App\Http\Controllers\PrendaController::class, 'image']); //ruta hacia la imagen, es unico debido al ID, esto activa la funcion 'image'

