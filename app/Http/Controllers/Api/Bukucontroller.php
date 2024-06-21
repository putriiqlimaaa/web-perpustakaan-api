<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Bukucontroller extends Controller
{
    public function index()
    {
        $data = buku::orderBy('judul', 'asc')->get();
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
        $dataBuku = new buku;

        $rules = [
            'kode'=>'required',
            'gambar'=>'required',
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'sinopsis'=>'required',
            'kategori'=>'required',
            'stok'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $dataBuku->kode = $request->kode;
        $dataBuku->gambar = $request->gambar;
        $dataBuku->judul = $request->judul;
        $dataBuku->penulis = $request->penulis;
        $dataBuku->penerbit = $request->penerbit;
        $dataBuku->tahun_terbit = $request->tahun_terbit;
        $dataBuku->sinopsis = $request->sinopsis;
        $dataBuku->kategori = $request->kategori;
        $dataBuku->stok = $request->stok;

        $post = $dataBuku->save();

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
        $data = buku::find($id);
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
        $dataBuku = buku::find($id);
        if(empty($dataBuku)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'kode'=>'required',
            'gambar'=>'required',
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'sinopsis'=>'required',
            'kategori'=>'required',
            'stok'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $dataBuku->kode = $request->kode;
        $dataBuku->gambar = $request->gambar;
        $dataBuku->judul = $request->judul;
        $dataBuku->penulis = $request->penulis;
        $dataBuku->penerbit = $request->penerbit;
        $dataBuku->tahun_terbit = $request->tahun_terbit;
        $dataBuku->sinopsis = $request->sinopsis;
        $dataBuku->kategori = $request->kategori;
        $dataBuku->stok = $request->stok;

        $post = $dataBuku->save();

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
        $dataBuku = buku::find($id);
        if(empty($dataBuku)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $dataBuku->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}
