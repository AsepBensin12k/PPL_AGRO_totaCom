<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    {{-- Tampilkan pesan validasi --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Tampilkan pesan sukses jika ada --}}
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('stok.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" required><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>

        <label for="id_jenis">Jenis Produk:</label><br>
        <select name="id_jenis" id="id_jenis" required>
            <option value=""> -- Pilih Jenis Produk -- </option>
            @foreach($jenisProduks as $jenis)
                <option value="{{ $jenis->id_jenis }}">{{ $jenis->nama_jenis }}</option>
            @endforeach
        </select><br><br>

        <label>Gambar (opsional):</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
