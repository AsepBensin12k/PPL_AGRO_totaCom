<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;

class StokController extends Controller
{
    public function index()
    {
        $produks = Produk::all();  // Mengambil semua data produk
        return view('stok.index', compact('produks'));  // Mengirim variabel 'produks' ke view
    }

    public function create()
    {
        return view('stok.create');
    }

    public function store(Request $request)
    {
        Log::info('Semua file dari form:', $request->allFiles());

        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->all();

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

    public function edit($id)
    {
        $produk = Produk::findOrFail($id); // Akan mencari berdasarkan 'id_produk' karena sudah didefinisikan di model
        return view('stok.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $produk = Produk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk_gambar', 'public');
            $data['gambar'] = $gambarPath;
        }

        $produk->update($data);
        return redirect()->route('stok.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('stok.index')->with('success', 'Produk berhasil dihapus');
    }

}
