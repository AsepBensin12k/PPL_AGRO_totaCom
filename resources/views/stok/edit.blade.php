<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    @error('nama_produk')
    <div class="text-red-500">{{ $message }}</div>
    @enderror

    <form action="{{ route('stok.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" ><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok', $produk->stok) }}"><br><br>

        <label>Jenis Produk:</label><br>
        <select name="id_jenis">
            @foreach(\App\Models\Jenis::all() as $jenis)
                <option value="{{ $jenis->id_jenis }}"
                    {{ $produk->id_jenis == $jenis->id_jenis ? 'selected' : '' }}>
                    {{ $jenis->nama_jenis }}
                </option>
            @endforeach
        </select><br><br>

        <label>Gambar (opsional):</label><br>
        <input type="file" name="gambar"><br><br>

        @if($produk->gambar)
            <img src="{{ asset('storage/'.$produk->gambar) }}" width="100"><br>
            <label>
                <input type="checkbox" name="remove_image" value="1"> Hapus gambar ini
            </label><br><br>
        @endif


        <button type="submit">Update</button>
    </form>
</body>
</html>
