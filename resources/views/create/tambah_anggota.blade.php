@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Input Data</h2>


<form action="/simpan_anggota" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukan Nama Sekolah" required/>
    </div>
   <div class="form-group">
        <label>No Telp :</label>
        <input type="text" name="no_telp" class="form-control" placeholder="Masukan Jurusan" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_anggota" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection