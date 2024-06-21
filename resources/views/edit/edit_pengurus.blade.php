@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Edit Data pengurus</h2>

<form action="/update_pengurus/{{ $pengurus->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $pengurus->nama }}" required/>
    </div>
    <div class="form-group">
        <label>Jabatan:</label>
        <input type="text" name="jabatan" class="form-control" value="{{ $pengurus->jabatan }}" required>
    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" value="{{ $pengurus->alamat }}" required/>
    </div>
    <div class="form-group">
        <label>No_telp:</label>
        <input type="text" name="no_telp" class="form-control" value="{{ $pengurus->no_telp }}" required>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_pengurus" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection