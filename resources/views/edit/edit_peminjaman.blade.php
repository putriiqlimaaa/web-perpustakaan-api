@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Edit Data peminjaman</h2>

<form action="/update_peminjaman/{{ $peminjaman->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>nama peminjam:</label>
        <input type="text" name="nama_peminjam" class="form-control" value="{{ $peminjaman->nama_peminjam }}" required/>
    </div>
    <div class="form-group">
        <label>Judul buku:</label>
        <input type="text" name="judul_buku" class="form-control" value="{{ $peminjaman->judul_buku }}" required/>
    </div>
    <div class="form-group">
        <label>tanggal pinjam:</label>
        <input type="text" name="tgl_pinjam" class="form-control" value="{{ $peminjaman->tgl_pinjam }}" required>
    </div>
    <div class="form-group">
        <label>tanggal kembali:</label>
        <input type="text" name="tgl_kembali" class="form-control" value="{{ $peminjaman->tgl_kembali }}" required/>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_peminjaman" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection