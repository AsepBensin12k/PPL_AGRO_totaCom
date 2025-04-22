<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Stok</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('stok.create') }}">Tambah Produk</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
            <tr>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->stok }}</td>
                <td>
                    @if($produk->gambar)
                        <img src="{{ asset('storage/'.$produk->gambar) }}" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('stok.edit', $produk->id_produk) }}">Edit</a>
                    <form action="{{ route('stok.destroy', $produk->id_produk) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
