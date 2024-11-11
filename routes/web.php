<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\DashBoard::class, 'index'])->name('index');

Route::get('/GruposEconomicos', [Controllers\GrupoEconomico::class, 'index'])->name('gruposEconomicos');

Route::get('/Bandeiras', [Controllers\Bandeira::class, 'index'])->name('bandeiras');

Route::get('/Unidades', [Controllers\Unidade::class, 'index'])->name('unidades');

Route::get('/Colaboradores', [Controllers\Colaborador::class, 'index'])->name('colaboradores');