<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalisaProdukController extends Controller
{
    public function index()
    {
        $bulanIni = Carbon::now()->format('m');
        $tahunIni = Carbon::now()->format('Y');

        $produkTerlaris = DB::table('detail_pesanans')
        ->join('pesanans', 'detail_pesanans.id_pesanan', '=', 'pesanans.id_pesanan')
        ->join('keranjangs', 'keranjangs.id_keranjang', '=', 'pesanans.id_keranjang')
        ->join('produks', 'keranjangs.id_produk', '=', 'produks.id_produk')
        ->join('statuses', 'pesanans.id_status', '=', 'statuses.id_status')
        ->join('riwayat_transaksies', 'riwayat_transaksies.id_riwayat', '=', 'pesanans.id_pesanan')
        ->whereMonth('pesanans.tanggal', $bulanIni)
        ->whereYear('pesanans.tanggal', $tahunIni)
        ->where('statuses.id_status', 3)
        ->select(
            'produks.nama_produk',
            DB::raw('SUM(keranjangs.jumlah_produk) as total_terjual')
        )
        ->groupBy('produks.id_produk', 'produks.nama_produk')
        ->orderByDesc('total_terjual')
        ->limit(10)
        ->get();

            return view('analisa_produk.index', compact('produkTerlaris'));

    }
}
