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

        $produkTerlaris = DB::table('detail_pesanan')
            ->join('pesanan', 'detail_pesanan.id_pesanan', '=', 'pesanan.id_pesanan')
            ->join('produk', 'detail_pesanan.id_produk', '=', 'produk.id_produk')
            ->join('status', 'pesanan.id_status', '=', 'status.id_status')
            ->whereMonth('pesanan.tanggal', $bulanIni)
            ->whereYear('pesanan.tanggal', $tahunIni)
            ->where('status.id_status', 3)
            ->select('produk.nama_produk', DB::raw('SUM(detail_pesanan.jumlah_produk) as total_terjual'))
            ->groupBy('detail_pesanan.id_produk', 'produk.nama_produk')
            ->orderByDesc('total_terjual')
            ->limit(10)
            ->get();



        return view('analisa_produk.produk_terlaris', compact('produkTerlaris'));
    }

}
