<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\peminjaman;
use App\Models\userSignUp;
use Illuminate\Http\Request;

class formpeminjamancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = Auth::user();

    // Assuming your 'nama' attribute contains the user's name
    $loggedInUserName = $user->nama;

    $dtpeminjaman = Peminjaman::all();
    $dtusersignup = userSignup::all();
    return view('user.form_peminjaman', compact('dtpeminjaman', 'dtusersignup', 'loggedInUserName'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.form_peminjaman');
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

        return redirect('/daftar_pinjam')->with('success', 'Peminjaman berhasil dilakukan');
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
}
