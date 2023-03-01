<?php

namespace App\Http\Controllers;

use App\Models\Profilsekolah;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Status::all();
        return view('super_admin.status.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Status::all();
        return view('super_admin.status.create', compact('data'));
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
        Status::create($request->all());
        return redirect()->route('statuses.index')
            ->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $image = Profilsekolah::all();
        return view('super_admin.status.edit', compact('data'));
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
        $data = Status::findOrFail($id);
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect()->route('statuses.index')
            ->with('success', 'Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Status::findOrFail($id);
        $data->delete();
        return redirect()->route('statuses.index')
            ->with('success', 'Data Terhapus');
    }
}
