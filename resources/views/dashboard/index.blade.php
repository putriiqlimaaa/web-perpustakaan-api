@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Selamat datang!</h1>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Anggota</h5>
        <p class="card-text">Jumlah Anggota : {{$jumlahAnggota}} anggota</p>
        <a href="/data_anggota" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Buku</h5>
        <p class="card-text">Jumlah Buku : {{$jumlahBuku}} buku</p>
        <a href="/data_buku" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Peminjaman</h5>
        <p class="card-text">Jumlah peminjaman : {{$jumlahPeminjaman}} peminjaman</p>
        <a href="/data_peminjaman" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pengembalian</h5>
        <p class="card-text">Jumlah pengembalian : {{$jumlahPengembalian}} pengembalian</p>
        <a href="/data_pengembalian" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pengurus</h5>
        <p class="card-text">Jumlah Pengurus : {{$jumlahPengurus}} pengurus</p>
        <a href="/data_cuti" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

</div>
@endsection
