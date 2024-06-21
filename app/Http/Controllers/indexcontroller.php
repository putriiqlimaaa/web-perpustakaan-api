<?php

namespace App\Http\Controllers;
use App\Models\anggota;
use App\Models\buku;
use App\Models\peminjaman;
use App\Models\pengembalian;
use App\Models\pengurus;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahAnggota = anggota::all()->count();
        $jumlahBuku = buku::all()->count();
        $jumlahPeminjaman = peminjaman::all()->count();
        $jumlahPengembalian = pengembalian::all()->count();
        $jumlahPengurus = pengurus::all()->count();
        return view('dashboard.index')->with([
            'jumlahAnggota' => $jumlahAnggota,
            'jumlahBuku' => $jumlahBuku,
            'jumlahPeminjaman' => $jumlahPeminjaman,
            'jumlahPengembalian' => $jumlahPengembalian,
            'jumlahPengurus' => $jumlahPengurus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
