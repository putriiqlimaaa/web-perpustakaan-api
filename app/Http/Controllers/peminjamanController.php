<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;

class peminjamanController extends Controller
{
    public function index()
    {
        $dtpeminjaman = peminjaman::all();
        return view('anggota.data_peminjaman', compact('dtpeminjaman'));
    }

    public function tampilan_pengguna()
{
    $peminjaman = peminjaman::all();
    return view('create.tambah_peminjaman', compact('peminjaman'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_peminjaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
        ]);

        return redirect('/data_peminjaman')->with('success', 'Data peminjaman berhasil disimpan');
    }

    public function edit($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        return view('edit.edit_peminjaman', compact('peminjaman'));
    }

    public function destroy($id)
{
    $peminjaman = peminjaman::findOrFail($id);
    $peminjaman->delete();

    return redirect('/data_peminjaman')->with('success', 'Data peminjaman berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
        ]);

        peminjaman::whereId($id)->update($validatedData);

        return redirect('/data_peminjaman')->with('success', 'Data peminjaman berhasil diperbarui');
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
        return view('anggota.data_peminjaman', ['dtpeminjaman' => $dtpeminjaman])->with('message', 'No results found.');
    } else {
        return view('anggota.data_peminjaman', ['dtpeminjaman' => $dtpeminjaman]);
    }
}

}