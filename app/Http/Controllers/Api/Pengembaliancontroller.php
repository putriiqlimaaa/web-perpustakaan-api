<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Pengembaliancontroller extends Controller
{
    public function index()
    {
        $data = pengembalian::orderBy('nama_peminjam', 'asc')->get();
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
        $datapengembalian= new pengembalian();

        $rules = [
            'nama_peminjam'=>'required',
            'judul_buku'=>'required',
            'tgl_kembali'=>'required',
            'denda'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $datapengembalian->nama_peminjam = $request->nama_peminjam;
        $datapengembalian->judul_buku = $request->judul_buku;
        $datapengembalian->tgl_kembali = $request->tgl_kembali;
        $datapengembalian->denda = $request->denda;


        $post = $datapengembalian->save();

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
        $data = pengembalian::find($id);
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
        $datapengembalian = pengembalian::find($id);
        if(empty($datapengembalian)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama_peminjam'=>'required',
            'judul_buku'=>'required',
            'tgl_kembali'=>'required',
            'denda'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $datapengembalian->nama_peminjam = $request->nama_peminjam;
        $datapengembalian->judul_buku = $request->judul_buku;
        $datapengembalian->tgl_kembali = $request->tgl_kembali;
        $datapengembalian->denda = $request->denda;


        $post = $datapengembalian->save();

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
        $datapengembalian = pengembalian::find($id);
        if(empty($datapengembalian)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $datapengembalian->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}


