<?php

namespace App\Http\Controllers\Super_admin;

use App\Models\Kelas;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kelas::all();
        return view('super_admin.kelas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('super_admin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namakelas' => 'required',
            'keterangan' => 'required'
        ]);
        Kelas::create($request->all());
        return redirect()->route('kelas.index')
            ->with('success', 'Data tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $data = Kelas::findOrFail($id);
        return view('super_admin.kelas.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Kelas::findOrFail($id);
        return view('super_admin.kelas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namakelas' => 'required',
            'keterangan' => 'required'
        ]);
        $data = $request->all();
        $data = Kelas::findOrFail($id);
        $data->namakelas = $request->namakelas;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect()->route('kelas.index')
            ->with('success', 'Data DiUpdate ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kelas::findOrFail($id);
        $data->delete();
        return redirect()->route('kelas.index')
            ->with('success', 'Data Terhapus');
    }
}
