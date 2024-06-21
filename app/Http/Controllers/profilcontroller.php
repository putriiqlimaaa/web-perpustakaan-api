<?php

namespace App\Http\Controllers;
use App\Models\anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 

class profilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtanggota = anggota::all();
        return view('user.profil', compact('dtanggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.profil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $newAnggota = anggota::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp,
    ]);

    // Setelah menyimpan data, kembali ke halaman profil dengan menambahkan data anggota yang baru
    Session::put('success', 'Data anggota sukses disimpan');
        // Store the newAnggota data in session
        Session::put('newAnggota', $newAnggota);

        return redirect('/profil');
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
