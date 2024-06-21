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
            <li><a href="/user_halaman">Beranda</a></li>
            <li><a href="#" class="active">Peminjaman</a></li>
            <li><a href="/daftar_pengembalian">Pengembalian</a></li>
            <li><a href="/profil">Profil</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="search">
            <form class="form-inline my-2 my-lg-0" method="GET" action="/search_daftarpeminjaman">
                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <table class="my-3 table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama peminjam</th>
                        <th>Judul buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal kembali</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dtpeminjaman as $key => $item)
                        @if($item->nama_peminjam === $loggedInUserName)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama_peminjam}}</td>
                            <td>{{ $item->judul_buku}}</td>
                            <td>{{ $item->tgl_pinjam}}</td>
                            <td>{{ $item->tgl_kembali}}</td>
                            <td>
                                <!-- Delete Button -->
                                <form action="/hapus_daftarpeminjaman/{{ $item->id }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data peminjaman ini?')">Hapus</button>
                                </form>
                                
                                <!-- Update Button -->
                                <form action="/update_daftarpeminjaman/{{ $item->id }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('PUT') <!-- or @method('PATCH') -->
                                    <button type="submit" class="btn btn-sm btn-success btn-selesai" onclick="return confirm('Anda yakin ingin menyelesaikan peminjaman ini?')">Selesai</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>


    <div class="logout-float">
    <a href="/" >
        Logout
    </a>
  </div>
</body>

</html>