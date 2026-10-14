<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Página inicial de Laravel
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas del CRUD de productos
Route::resource('productos', ProductoController::class)
    ->except(['show']);

// Rutas del módulo de clientes
Route::resource('clientes', \App\Http\Controllers\ClienteController::class)
    ->except(['show']);
