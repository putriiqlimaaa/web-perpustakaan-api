<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\peminjaman;
use App\Models\pengembalian;
use Illuminate\Http\Request;

class daftarpinjamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

    // Assuming your 'nama' attribute contains the user's name
    $loggedInUserName = $user->nama;
        
        $dtpeminjaman = peminjaman::all();
        return view('user.daftar_pinjam', compact('dtpeminjaman', 'loggedInUserName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.daftar_pinjam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
        ]);

        return redirect('/user_halaman')->with('success', 'Peminjaman berhasil dilakukan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Temukan data peminjaman berdasarkan ID
    $peminjaman = peminjaman::findOrFail($id);

    // Hitung denda jika tgl_kembali melewati tanggal yang dijadwalkan
    $tgl_kembali = new \DateTime($peminjaman->tgl_kembali);
    $tgl_selesai = new \DateTime($request->tgl_selesai);
    $denda = 0;
    if ($tgl_selesai > $tgl_kembali) {
        // Hitung selisih hari
        $selisih_hari = $tgl_selesai->diff($tgl_kembali)->days;
        // Set denda
        $denda = $selisih_hari * 2000; // Denda Rp 2.000 per hari
    }

    // Simpan data ke dalam tabel pengembalian
    pengembalian::create([
        'nama_peminjam' => $peminjaman->nama_peminjam,
        'judul_buku' => $peminjaman->judul_buku,
        'tgl_kembali' => $peminjaman->tgl_kembali,
        // Set denda berdasarkan logika di atas
        'denda' => $denda,
    ]);

    // Hapus data dari tabel peminjaman
    $peminjaman->delete();

    // Redirect ke halaman yang sesuai
    return redirect('/daftar_pengembalian')->with('success', 'Peminjaman berhasil diselesaikan');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $peminjaman = peminjaman::findOrFail($id);
    $peminjaman->delete();

    return redirect('/daftar_pinjam')->with('success', 'Data peminjaman berhasil dihapus');
}

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtpeminjaman = peminjaman::where('nama_peminjam', 'LIKE', "%$query%")
                    ->orWhere('judul_buku', 'LIKE', "%$query%")
                    ->orWhere('tgl_pinjam', 'LIKE', "%$query%")
                    ->orWhere('tgl_kembali', 'LIKE', "%$query%")
                    ->get();

    if ($dtpeminjaman->isEmpty()) {
        return view('user.daftar_pinjam', ['dtpeminjaman' => $dtpeminjaman])->with('message', 'No results found.');
    } else {
        return view('user.daftar_pinjam', ['dtpeminjaman' => $dtpeminjaman]);
    }
}
}
