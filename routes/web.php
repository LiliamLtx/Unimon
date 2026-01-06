<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/servicos', [MainController::class, 'services'])->name('servicos');
Route::post('/pesquisar',[MainController::class, 'servicesList'])->name('pesquisar');
