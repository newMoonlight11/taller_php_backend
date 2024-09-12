<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;

Route::get('/', HomeController::class);

Route::prefix('/perfil')->controller(PerfilController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/intereses', 'intereses')->name('intereses');
    Route::get('/habilidades','habilidades')->name('habilidades');
    Route::get('/metas','metas')->name('metas');
});

