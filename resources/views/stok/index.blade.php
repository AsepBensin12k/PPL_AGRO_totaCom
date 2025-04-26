<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Stok</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl font-semibold mb-6">Daftar Produk</h1>

    <x-search-bar placeholder="Cari produk atau jenis..." />

    @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <a href="{{ route('stok.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Tambah Produk</a>

    <table class="mt-6 w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Nama Produk</th>
                <th class="px-4 py-2 border">Jenis Produk</th>
                <th class="px-4 py-2 border">Harga</th>
                <th class="px-4 py-2 border">Stok</th>
                <th class="px-4 py-2 border">Gambar</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr>
                    <td class="px-4 py-2 border">{{ $produk->nama_produk }}</td>
                    <td class="px-4 py-2 border">{{ $produk->jenis->nama_jenis ?? 'Tidak diketahui' }}</td>
                    <td class="px-4 py-2 border">{{ $produk->harga }}</td>
                    <td class="px-4 py-2 border">{{ $produk->stok }}</td>
                    <td class="px-4 py-2 border">
                        @if($produk->gambar)
                            <img src="{{ asset('storage/'.$produk->gambar) }}" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('stok.edit', $produk->id_produk) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('stok.destroy', $produk->id_produk) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
