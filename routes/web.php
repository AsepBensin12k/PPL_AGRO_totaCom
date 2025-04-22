<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
use App\Http\Controllers\AnalisaProdukController;



Route::get('/analisa-produk', [AnalisaProdukController::class, 'index']);


// Hapus rute manual 'stok/{id}/edit' dan biarkan Route::resource yang menangani semuanya
Route::resource('stok', StokController::class);


Route::get('/', function () {
    return view('welcome');
});
