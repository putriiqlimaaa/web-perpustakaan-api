<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\pengembalian;
use Illuminate\Http\Request;

class daftarpengembaliancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();

        // Assuming your 'nama' attribute contains the user's name
        $loggedInUserName = $user->nama;

        $dtpengembalian = pengembalian::all();
        return view('user.daftar_pengembalian', compact('dtpengembalian', 'loggedInUserName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.daftar_pengembalian');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pengembalian::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tgl_kembali' => $request->tgl_kembali,
            'denda' => $request->denda,
        ]);

        return redirect('/user_halaman')->with('success', 'Pengembalian berhasil dilakukan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
        return view('user.daftar_pengembalian', ['dtpengembalian' => $dtpengembalian])->with('message', 'No results found.');
    } else {
        return view('user.daftar_pengembalian', ['dtpengembalian' => $dtpengembalian]);
    }
}
}
