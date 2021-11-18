<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formulas;

Route::get('/', [Formulas::class,'inicio'])->name('velocidad');
Route::post('/calcula', [Formulas::class, 'calcula'])->name('calcular');