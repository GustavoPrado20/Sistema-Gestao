<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/GE', function () {
    return view('gruposEconomicos');
})->name('gruposEconomicos');

Route::get('/BA', function () {
    return view('bandeiras');
})->name('bandeiras');

Route::get('/UN', function () {
    return view('unidades');
})->name('unidades');

Route::get('/CO', function () {
    return view('colaboradores');
})->name('colaboradores');