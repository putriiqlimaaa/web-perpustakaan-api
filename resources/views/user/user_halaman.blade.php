<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <header>
    <h1>Perpustakaan</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#" class="active">Beranda</a></li>
      <li><a href="/daftar_pinjam">Peminjaman</a></li>
      <li><a href="/daftar_pengembalian">Pengembalian</a></li>
      <li><a href="/profil">Profil</a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="library">
      <h2>Selamat datang di Perpustakaan kami!</h2>
      <p>Menyediakan berbagai koleksi buku terbaru dan terbaik</p>
    </div>
    <div class="pos">
      <!-- Loop untuk menampilkan daftar buku -->
      @foreach($dtbuku as $key => $item)
      <div class="card">
      <div class="card-image">
            <img src="{{ asset('images/' . $item->gambar) }}"  alt="">
        </div>
        <div class="card-details">
          <h3 class="book-title">{{ $item->judul }}</h3>
          <p class="book-details">Penulis: {{ $item->penulis }}</p>
          <p class="book-details">Tahun Terbit: {{ $item->tahun_terbit }}</p>
          <p class="book-details">Tahun Terbit: {{ $item->tahun_terbit }}</p>
          <p class="book-details">Stok: {{ $item->stok }}</p>
        </div>
        <div class="button">
          <a href="/form_peminjaman?judul={{ $item->judul }}" class="btn">Pinjam</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  

  <div class="logout-float">
    <a href="/" >
        Logout
    </a>
  </div>
</body>
</html>
