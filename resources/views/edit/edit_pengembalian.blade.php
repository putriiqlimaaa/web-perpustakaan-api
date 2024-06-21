@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Edit Data pengembalian</h2>

<form action="/update_pengembalian/{{ $pengembalian->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>nama peminjam:</label>
        <input type="text" name="nama_peminjam" class="form-control" value="{{ $pengembalian->nama_peminjam }}" required/>
    </div>
    <div class="form-group">
        <label>Judul buku:</label>
        <input type="text" name="judul_buku" class="form-control" value="{{ $pengembalian->judul_buku }}" required/>
    </div>
    <div class="form-group">
        <label>tanggal kembali:</label>
        <input type="text" name="tgl_kembali" class="form-control" value="{{ $pengembalian->tgl_kembali }}" required>
    </div>
    <div class="form-group">
        <label>denda:</label>
        <input type="text" name="denda" class="form-control" value="{{ $pengembalian->denda }}" required/>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_pengembalian" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection