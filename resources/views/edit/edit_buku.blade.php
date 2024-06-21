@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Edit Data buku</h2>

<form action="/update_buku/{{ $buku->id }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Kode:</label>
        <input type="text" name="kode" class="form-control" value="{{ $buku->kode }}" required/>
    </div>
    <div class="form-group">
        <label>Gambar:</label><br>
        @if ($buku->gambar)
            <img src="{{ asset('images/' . $buku->gambar) }}" alt="Gambar Buku" width="200"><br><br>
        @else
            <p>No image found</p><br>
        @endif
        <input type="file" name="gambar" class="form-control-file" accept="image/png, image/jpeg, image/jpg"/>
    </div>
    <div class="form-group">
        <label>Judul:</label>
        <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required/>
    </div>
    <div class="form-group">
        <label>Sinopsis:</label>
        <input type="text" name="sinopsis" class="form-control" value="{{ $buku->sinopsis }}" required>
    </div>
    <div class="form-group">
        <label>Penulis:</label>
        <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}" required>
    </div>
    <div class="form-group">
        <label>penerbit:</label>
        <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" required/>
    </div>
    <div class="form-group">
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}" required/>
    </div>
    <div class="form-group">
        <label for="kategori">Kategori:</label>
        <select id="kategori" name="kategori" class="form-control" required>
            <option value="">Pilih kategori</option>
            <option value="Pelajaran" {{ $buku->kategori === 'Pelajaran' ? 'selected' : '' }}>Pelajaran</option>
            <option value="Novel" {{ $buku->kategori === 'Novel' ? 'selected' : '' }}>Novel</option>
            <option value="Cerita Anak" {{ $buku->kategori === 'Cerita Anak' ? 'selected' : '' }}>Cerita Anak</option>
            <option value="Sejarah" {{ $buku->kategori === 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
            <option value="Agama" {{ $buku->kategori === 'Agama' ? 'selected' : '' }}>Agama</option>
        </select>
    </div>
    <div class="form-group">
        <label>Stok:</label>
        <input type="text" name="stok" class="form-control" value="{{ $buku->stok }}" required/>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_buku" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection