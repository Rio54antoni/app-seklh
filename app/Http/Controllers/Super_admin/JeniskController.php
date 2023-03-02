<?php

namespace App\Http\Controllers\Super_admin;

use App\Models\Jenisk;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;

class JeniskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jenisk::all();
        return view('super_admin.jeniskelamin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = Jenisk::all();
        return view('super_admin.jeniskelamin.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        Jenisk::create($request->all());
        return redirect()->route('jenisks.index')
            ->with('success', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenisk $jenisk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Jenisk::findOrFail($id);

        return view('super_admin.jeniskelamin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required']);
        $data = Jenisk::findOrFail($id);
        $data->nama = $request->nama;
        $data->update();
        return redirect()->route('jenisks.index')
            ->with('success', 'Data Berhasi Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Jenisk::findOrFail($id);
        $data->delete();
        return redirect()->route('jenisks.index')
            ->with('success', 'Data Terhapus');
    }
}
