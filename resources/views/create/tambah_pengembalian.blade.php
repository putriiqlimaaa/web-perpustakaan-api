@extends('dashboard.layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_pengembalian" method="post">
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
        <label>Tanggal kembali :</label>
        <input type="date"  name="tgl_kembali" class='form-control' required/>
    </div>
   <div class="form-group">
        <label>denda :</label>
        <input type="text" name="denda" class="form-control" placeholder="Masukan Jumlah denda" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_pengembalian" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection