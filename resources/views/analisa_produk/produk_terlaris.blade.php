<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa Produk Terlaris</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .header-title {
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }
        .subtext {
            text-align: center;
            color: #6c757d;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="header-title">10 Produk Terlaris Bulan Ini</div>
        <div class="subtext">Analisa berdasarkan data pesanan yang telah selesai</div>

        @if($produkTerlaris->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada data penjualan bulan ini.
        </div>
        @else
        <div class="card p-4">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jumlah Terjual</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produkTerlaris as $index => $produk)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ $produk->total_terjual }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</body>
</html>
