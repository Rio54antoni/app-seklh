<?php

namespace App\Http\Controllers\Super_admin;

use App\Models\Matapelajaran;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatapelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Matapelajaran::all();
        return view('super_admin.mata_pelajaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('super_admin.mata_pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namapelajaran' => 'required',
            'jam' => 'required'
        ]);
        Matapelajaran::create($request->all());
        return redirect()->route('matapelajarans.index')
            ->with('success', 'Data Berhasil DiTambah ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $data = Matapelajaran::findOrFail($id);
        return view('super_admin.mata_pelajaran.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Matapelajaran::findOrFail($id);
        return view('super_admin.mata_pelajaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namapelajaran' => 'required',
            'jam' => 'required'
        ]);
        $data = $request->all();
        $data = Matapelajaran::findOrFail($id);
        $data->namapelajaran = $request->namapelajaran;
        $data->jam = $request->jam;
        $data->update();
        return redirect()->route('matapelajarans.index')->with('success', 'Data DI Update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Matapelajaran::findOrFail($id);
        $data->delete();
        return redirect()->route('matapelajarans.index')
            ->with('success', 'Data Terhapus');
    }
}
