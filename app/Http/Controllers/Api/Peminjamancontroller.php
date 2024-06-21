<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Peminjamancontroller extends Controller
{
    public function index()
    {
        $data = peminjaman::orderBy('nama_peminjam', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datapeminjaman = new peminjaman;

        $rules = [
            'nama_peminjam'=>'required',
            'judul_buku'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $datapeminjaman->nama_peminjam = $request->nama_peminjam;
        $datapeminjaman->judul_buku = $request->judul_buku;
        $datapeminjaman->tgl_pinjam = $request->tgl_pinjam;
        $datapeminjaman->tgl_kembali = $request->tgl_kembali;


        $post = $datapeminjaman->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses menambahkan data',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = peminjaman::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datapeminjaman = peminjaman::find($id);
        if(empty($datapeminjaman)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama_peminjam'=>'required',
            'judul_buku'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $datapeminjaman->nama_peminjam = $request->nama_peminjam;
        $datapeminjaman->judul_buku = $request->judul_buku;
        $datapeminjaman->tgl_pinjam = $request->tgl_pinjam;
        $datapeminjaman->tgl_kembali = $request->tgl_kembali;


        $post = $datapeminjaman->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan update data',
        ]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapeminjaman = peminjaman::find($id);
        if(empty($datapeminjaman)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $datapeminjaman->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}


