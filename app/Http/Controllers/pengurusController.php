<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengurus;

class pengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtpengurus = pengurus::all();
        return view('pengurus.data_pengurus', compact('dtpengurus'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_pengurus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pengurus::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/data_pengurus')->with('success', 'Data pengurus sukses disimpan');
    }

    public function edit($id)
    {
        $pengurus = pengurus::findOrFail($id);
        return view('edit.edit_pengurus', compact('pengurus'));
    }

    public function destroy($id)
{
    $pengurus = pengurus::findOrFail($id);
    $pengurus->delete();

    return redirect('/data_pengurus')->with('success', 'Data pengurus berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        pengurus::whereId($id)->update($validatedData);

        return redirect('/data_pengurus')->with('success', 'Data pengurus berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtpengurus = pengurus::where('nama', 'LIKE', "%$query%")
                    ->orWhere('jabatan', 'LIKE', "%$query%")
                    ->orWhere('alamat', 'LIKE', "%$query%")
                    ->orWhere('no_telp', 'LIKE', "%$query%")
                    ->get();

    if ($dtpengurus->isEmpty()) {
        return view('pengurus.data_pengurus', ['dtpengurus' => $dtpengurus])->with('message', 'No results found.');
    } else {
        return view('pengurus.data_pengurus', ['dtpengurus' => $dtpengurus]);
    }
}

}
