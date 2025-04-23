<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;
use App\Models\Jenis;

class StokController extends Controller
{
    public function index()
    {
        // Memuat produk beserta jenis produk menggunakan eager loading
        $produks = Produk::with('jenis')->get();
        return view('stok.index', compact('produks'));
    }

    public function create()
    {
        $jenisProduks = Jenis::all();
        return view('stok.create', compact('jenisProduks'));
    }


    public function store(Request $request)
    {
        Log::info('Semua file dari form:', $request->allFiles());

        $request->validate([
            'nama_produk' => 'required|unique:produk,nama_produk',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'id_jenis' => 'required|exists:jenis,id_jenis',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->only(['nama_produk', 'harga', 'stok', 'id_jenis']); // ambil juga id_jenis

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk_gambar', 'public');
            $data['gambar'] = $gambarPath;
            Log::info('File berhasil diupload: ' . $gambarPath);
        } else {
            Log::warning('Tidak ada gambar diunggah!');
        }

        Produk::create($data);
        return redirect()->route('stok.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Menampilkan form untuk edit produk
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('stok.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'nullable|unique:produk,nama_produk,' . $id . ',id_produk',
            'stok' => 'nullable|integer',
            'harga' => 'nullable|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_jenis' => 'required|exists:jenis,id_jenis'
        ]);

        $produk = Produk::findOrFail($id); // Cari produk berdasarkan ID

        $data = $request->only(['nama_produk', 'harga', 'stok', 'id_jenis']); // Ambil hanya data yang relevan

        // Jika gambar di-upload, simpan dan update path-nya
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk_gambar', 'public');
            $data['gambar'] = $gambarPath;
        }

        // Update produk dengan data yang diubah
        $produk->update($data);

        return redirect()->route('stok.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('stok.index')->with('success', 'Produk berhasil diperbarui!');
    }

}
