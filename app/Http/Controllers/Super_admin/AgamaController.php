<?php

namespace App\Http\Controllers\Super_admin;

use App\Models\Agama;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Agama::all();
        return view('super_admin.agama.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('super_admin.agama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        Agama::create($request->all());
        return redirect()->route('agamas.index')
            ->with('success', 'Data Barhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agama $agama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Agama::findOrFail($id);
        return view('super_admin.agama.edit', compact('data'));
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
        $data = Agama::findOrFail($id);
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect()->route('agamas.index')
            ->with('success', 'Data Telah Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Agama::findOrFail($id);
        $data->delete();
        return redirect()->route('agamas.index')
            ->with('success', 'Data Terhapus');
    }
}
