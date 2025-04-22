<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('stok.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" required><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $produk->harga }}" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ $produk->stok }}" required><br><br>

        <label>Gambar (opsional):</label><br>
        <input type="file" name="gambar"><br><br>

        @if($produk->gambar)
            <img src="{{ asset('storage/'.$produk->gambar) }}" width="100"><br><br>
        @endif

        <button type="submit">Update</button>
    </form>
</body>
</html>
