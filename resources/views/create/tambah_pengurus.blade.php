@extends('dashboard.layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_pengurus" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required/>
    </div>
    <div class="form-group">
        <label>jabatan:</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" required/>
    </div>
   <div class="form-group">
        <label>No Telp :</label>
        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_pengurus" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection