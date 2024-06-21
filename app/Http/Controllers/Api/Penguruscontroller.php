<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Penguruscontroller extends Controller
{
    public function index()
    {
        $data = pengurus::orderBy('nama', 'asc')->get();
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
        $datapengurus = new pengurus;

        $rules = [
            'nama'=>'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $datapengurus->nama = $request->nama;
        $datapengurus->jabatan = $request->jabatan;
        $datapengurus->alamat = $request->alamat;
        $datapengurus->no_telp = $request->no_telp;


        $post = $datapengurus->save();

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
        $data = pengurus::find($id);
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
        $datapengurus = pengurus::find($id);
        if(empty($datapengurus)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $datapengurus->nama = $request->nama;
        $datapengurus->jabatan = $request->jabatan;
        $datapengurus->alamat = $request->alamat;
        $datapengurus->no_telp = $request->no_telp;


        $post = $datapengurus->save();

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
        $datapengurus = pengurus::find($id);
        if(empty($datapengurus)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $datapengurus->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}
