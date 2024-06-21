<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtbuku = buku::all();
        return view('buku.data_buku', compact('dtbuku'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
        ]);
    
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('images'), $gambar);
            $validatedData['gambar'] = $gambar;
        }

        // Menyimpan data buku baru ke dalam database
        buku::create($validatedData);

        // Mengarahkan kembali ke halaman daftar buku dengan pesan sukses
        return redirect('/data_buku')->with('success', 'Data buku sukses disimpan');
    }

    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        return view('edit.edit_buku', compact('buku'));
    }

    public function destroy($id)
{
    $buku = buku::findOrFail($id);
    $buku->delete();

    return redirect('/data_buku')->with('success', 'Data buku berhasil dihapus');
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'kode' => 'required',
        'gambar' => 'image|mimes:jpg,png,jpeg|max:2048',
        'judul' => 'required',
        'sinopsis' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'kategori' => 'required',
        'stok' => 'required',
    ]);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('images'), $gambar);
        $validatedData['gambar'] = $gambar;
    }

    // Pastikan menggunakan Eloquent untuk update
    buku::where('id', $id)->update($validatedData);

    return redirect('/data_buku')->with('success', 'Data buku berhasil diperbarui');
}


    public function search(Request $request)
{
    $query = $request->input('query');

    $dtbuku = buku::where('kode', 'LIKE', "%$query%")
                    ->orWhere('judul', 'LIKE', "%$query%")
                    ->orWhere('penulis', 'LIKE', "%$query%")
                    ->orWhere('penerbit', 'LIKE', "%$query%")
                    ->orWhere('tahun_terbit', 'LIKE', "%$query%")
                    ->orWhere('sinopsis', 'LIKE', "%$query%")
                    ->orWhere('kategori', 'LIKE', "%$query%")
                    ->orWhere('stok', 'LIKE', "%$query%")
                    ->get();

    if ($dtbuku->isEmpty()) {
        return view('buku.data_buku', ['dtbuku' => $dtbuku])->with('message', 'No results found.');
    } else {
        return view('buku.data_buku', ['dtbuku' => $dtbuku]);
    }
}

}
