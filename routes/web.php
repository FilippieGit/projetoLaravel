<?php

use Illuminate\Support\Facades\Route;

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/',[\App\Http\Controllers\MenuPrincipalController::class,'menuprincipal']);

Route::get('/sobrenos',[\App\Http\Controllers\SobreNosController::class,'sobrenos']);