<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página principal
Route::get('/', function () {
    return view('casa');
})->name('casa');

// Ruta para la sección "Fotos"
Route::get('/fotos', function () {
    return view('fotos');
})->name('fotos');

// Ruta para la sección "Contacto"
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
