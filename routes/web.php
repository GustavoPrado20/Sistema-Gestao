<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\DashboardController::class, 'index'])->name('index');

Route::get('/GruposEconomicos', [Controllers\GrupoEconomicoController::class, 'index'])->name('gruposEconomicos');
// Route::prefix('/GruposEconomicos')->group(function(){
    
// });

Route::get('/Bandeiras', [Controllers\BandeiraController::class, 'index'])->name('bandeiras');

Route::get('/Unidades', [Controllers\UnidadeController::class, 'index'])->name('unidades');

Route::get('/Colaboradores', [Controllers\ColaboradorController::class, 'index'])->name('colaboradores');