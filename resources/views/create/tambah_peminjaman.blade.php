@extends('dashboard.layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_peminjaman" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Peminjam:</label>
        <input type="text" name="nama_peminjam" class="form-control" placeholder="Masukan nama peminjam" required/>
    </div>
    <div class="form-group">
        <label>Judul Buku:</label>
        <input type="text" name="judul_buku" class="form-control" placeholder="Masukan judul buku" required/>
    </div>
    <div class="form-group">
        <label>Tanggal pinjam:</label>
        <input type="date"  name="tgl_pinjam" class="form-control" required/>
   <div class="form-group">
        <label>Tanggal kembali :</label>
        <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_peminjaman" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection