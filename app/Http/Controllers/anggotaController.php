<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtanggota = anggota::all();
        return view('anggota.data_anggota', compact('dtanggota'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_anggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        anggota::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/data_anggota')->with('success', 'Data anggota sukses disimpan');
    }

    public function edit($id)
    {
        $anggota = anggota::findOrFail($id);
        return view('edit.edit_anggota', compact('anggota'));
    }

    public function destroy($id)
{
    $anggota = anggota::findOrFail($id);
    $anggota->delete();

    return redirect('/data_anggota')->with('success', 'Data anggota berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        anggota::whereId($id)->update($validatedData);

        return redirect('/data_anggota')->with('success', 'Data anggota berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtanggota = anggota::where('nama', 'LIKE', "%$query%")
                    ->orWhere('alamat', 'LIKE', "%$query%")
                    ->orWhere('no_telp', 'LIKE', "%$query%")
                    ->get();

    if ($dtanggota->isEmpty()) {
        return view('anggota.data_anggota', ['dtanggota' => $dtanggota])->with('message', 'No results found.');
    } else {
        return view('anggota.data_anggota', ['dtanggota' => $dtanggota]);
    }
}

}
