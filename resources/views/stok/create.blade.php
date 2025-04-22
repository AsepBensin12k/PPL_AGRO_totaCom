<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>
    <form action="{{ route('stok.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" required><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>

        <label>Gambar:</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
