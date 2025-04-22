<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class AnalisaController extends Controller
{
    public function index()
    {
        $produkTerlaris = Produk::orderBy('terjual', 'desc')->first();
        return view('analisa.index', compact('produkTerlaris'));
    }
}
