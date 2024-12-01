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
Route::resource('prendas', App\Http\Controllers\PrendaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/sobre_nosotros', 'aboutus')->name('aboutus');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');


