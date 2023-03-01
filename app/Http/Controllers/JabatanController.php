<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Jabatan::all();
        return view('super_admin.jabatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = Jabatan::all();
        return view('super_admin.jabatan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ], [
            'nama.required' => 'Silahkan Inputkan Nama Jabatan',
            'keterangan.required' => 'Inputkan Keterangan'
        ]);
        Jabatan::create($request->all());
        return redirect()->route('jabatans.index')
            ->with('success', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Jabatan::findOrFail($id);
        return view('super_admin.jabatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        $data = Jabatan::findOrFail($id);
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect()->route('jabatans.index')
            ->with('success', 'Data Telah Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Jabatan::findOrFail($id);
        $data->delete();
        return redirect()->route('jabatans.index')
            ->with('success', 'Data Telah Dihapus');
    }
}
