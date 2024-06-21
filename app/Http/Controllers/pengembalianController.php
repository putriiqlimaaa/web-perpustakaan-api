<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengembalian;
use App\Models\userSignUp;

class pengembalianController extends Controller
{
    public function index()
    {
        $dtpengembalian = pengembalian::all();
        return view('anggota.data_pengembalian', compact('dtpengembalian'));
    }

    public function user()
    {
        return $this->belongsTo(userSignUp::class, 'nama_peminjam', 'nama');
    }

    public function tampilan_pengguna()
{
    $pengembalian = pengembalian::all();
    return view('create.tambah_pengembalian', compact('pengembalian'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_pengembalian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pengembalian::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tgl_kembali' => $request->tgl_kembali,
            'denda' => $request->denda,
        ]);

        return redirect('/data_pengembalian')->with('success', 'Data pengembalian berhasil disimpan');
    }

    public function edit($id)
    {
        $pengembalian = pengembalian::findOrFail($id);
        return view('edit.edit_pengembalian', compact('pengembalian'));
    }

    public function destroy($id)
{
    $pengembalian = pengembalian::findOrFail($id);
    $pengembalian->delete();

    return redirect('/data_pengembalian')->with('success', 'Data pengembalian berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tgl_kembali' => 'required|date',
            'denda' => 'required|numeric',
        ]);

        pengembalian::whereId($id)->update($validatedData);

        return redirect('/data_pengembalian')->with('success', 'Data pengembalian berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtpengembalian = pengembalian::where('nama_peminjam', 'LIKE', "%$query%")
                    ->orWhere('judul_buku', 'LIKE', "%$query%")
                    ->orWhere('tgl_kembali', 'LIKE', "%$query%")
                    ->orWhere('denda', 'LIKE', "%$query%")
                    ->get();

    if ($dtpengembalian->isEmpty()) {
        return view('anggota.data_pengembalian', ['dtpengembalian' => $dtpengembalian])->with('message', 'No results found.');
    } else {
        return view('anggota.data_pengembalian', ['dtpengembalian' => $dtpengembalian]);
    }
}

}