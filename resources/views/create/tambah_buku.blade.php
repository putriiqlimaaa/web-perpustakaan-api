@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Input Data</h2>


<form action="/simpan_buku" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label>kode:</label>
        <input type="text" name="kode" class="form-control" placeholder="Masukan kode" required />
        <div class="form-group" style="margin-top: 20px;">
            <label>Gambar:</label>
            <input type="file" name="gambar" class="form-control" accept="image/png, image/jpeg, image/jpg" required />
        </div>
    </div>
    <div class="form-group">
        <label>judul:</label>
        <input type="text" name="judul" class="form-control" placeholder="Masukan judul" required />
    </div>
    <div class="form-group">
        <label>Sinopsis:</label>
        <input type="text" name="sinopsis" class="form-control" laceholder="Masukan sinopsis" required />
    </div>
    <div class="form-group">
        <label>penulis :</label>
        <input type="text" name="penulis" class="form-control" placeholder="Masukan nama penulis" required />
    </div>
    <div class="form-group">
        <label>penerbit :</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Masukan penerbit" required />
    </div>
    <div class="form-group">
        <label>tahun terbit :</label>
        <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun terbit" required />
    </div>
    <div class="form-group">
        <label for="kategori">Kategori:</label>
        <select id="kategori" name="kategori" class="form-control" required>
            <option value="">Pilih kategori</option>
            <option value="Pelajaran">Pelajaran</option>
            <option value="Novel">Novel</option>
            <option value="Cerita Anak">Cerita Anak</option>
            <option value="Sejarah">Sejarah</option>
            <option value="Agama">Agama</option>
        </select>
    </div>
    <div class="form-group">
        <label>Stok:</label>
        <input type="text" name="stok" class="form-control" placeholder="Masukan Stok" required />
    </div>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_buku" class="btn btn-primary" role="button">Kembali</a>

</form>

@if(isset($gambar))
<img src="{{ asset('public/images/' . $gambar) }}" alt="Uploaded Image" style="margin-top: 20px;"> <!-- Perbaikan disini -->
@endif
@endsection