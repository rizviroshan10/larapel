<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::all();
        return view('fakultas.index') ->with('fakultas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->nama_wakil_dekan);

        // validasi data
        $validasi = $request->validate([
            'nama_fakultas' => 'required',
            'nama_dekan' => 'required',
            'nama_wakil_dekan' => 'required'
        ]);
        // dd($validasi);

        // buat objek dari model Fakultas
        $fakultas = new Fakultas();
        $fakultas->nama_fakultas = $validasi['nama_fakultas'];
        $fakultas->nama_dekan = $validasi['nama_dekan'];
        $fakultas->nama_wakil_dekan = $validasi['nama_wakil_dekan'];
        $fakultas->save(); // simpan

        return redirect()->route('fakultas.index')->with('success', "Data fakultas ".$validasi['nama_fakultas']." berhasil disimpan");
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
