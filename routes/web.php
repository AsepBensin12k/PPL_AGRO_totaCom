<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
use App\Http\Controllers\AnalisaController;

Route::get('/analisa', [AnalisaController::class, 'index'])->name('analisa.index');

Route::resource('stok', StokController::class);


Route::get('/', function () {
    return view('welcome');
});
