@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Edit Data anggota</h2>

<form action="/update_anggota/{{ $anggota->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required/>
    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" value="{{ $anggota->alamat }}" required/>
    </div>
    <div class="form-group">
        <label>No_telp:</label>
        <input type="text" name="no_telp" class="form-control" value="{{ $anggota->no_telp }}" required>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_anggota" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection