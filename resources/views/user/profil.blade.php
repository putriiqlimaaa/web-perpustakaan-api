<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/form.css">

</head>

<body>
  <header>
    <h1>Perpustakaan</h1>
  </header>
  <nav>
    <ul>
      <li><a href="/user_halaman">Beranda</a></li>
      <li><a href="/daftar_pinjam">Peminjaman</a></li>
      <li><a href="/daftar_pengembalian">Pengembalian</a></li>
      <li><a href="#profil" class="active">Profil</a></li>
    </ul>
  </nav>
  <div class="container">
    <form action="/simpan_profil" method="post">
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
    </form>

    <!-- Tampilkan data anggota yang baru saja disubmit dalam bentuk card -->
    @if(session('success'))
    <div class="isi">
      <div class="card">
        <p>Data anggota sukses disimpan:</p>
        <p>Nama: {{ session('newAnggota')->nama }}</p>
        <p>Alamat: {{ session('newAnggota')->alamat }}</p>
        <p>No Telp: {{ session('newAnggota')->no_telp }}</p>
      </div>
      </div>
    @endif

  </div>

  <div class="logout-float">
    <a href="/">Logout</a>
  </div>
</body>
</html>
