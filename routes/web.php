<?php

use App\Http\Controllers\BloqueController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/informacions', InformacionController::class);

Route::resource('/proyectos', ProyectoController::class);
Route::resource('/bloques', BloqueController::class);
