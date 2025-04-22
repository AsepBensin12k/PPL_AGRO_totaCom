<!DOCTYPE html>
<html>
<head>
    <title>Analisa Produk</title>
</head>
<body>
    <h1>Produk Terlaris</h1>
    @if ($produkTerlaris)
        <p>Nama Produk: <strong>{{ $produkTerlaris->nama }}</strong></p>
        <p>Total Terjual: <strong>{{ $produkTerlaris->terjual }}</strong></p>
    @else
        <p>Belum ada produk.</p>
    @endif
</body>
</html>
