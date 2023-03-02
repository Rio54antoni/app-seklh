<?php

namespace App\Http\Controllers\Super_admin;

use App\Models\Kepalasekolah;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;

class KepalasekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $data = Kepalasekolah::all();
        return view('super_admin.kepala_sekolah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.kepala_sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'nip' => 'required',
            'notelepon' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required',

        ]);
        $input = $request->all();

        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $input['foto'] = "$profileimage";
        }
        Kepalasekolah::create($input);
        // dd($input);
        return redirect()->route('kepalasekolahs.index')
            ->with('success', 'Data Sukses Tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $data = Kepalasekolah::findOrFail($id);
        return view('super_admin.kepala_sekolah.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Kepalasekolah::findOrFail($id);
        return view('super_admin.kepala_sekolah.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kepalasekolah $kepalasekolah)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'nip' => 'required',
            'notelepon' => 'required',
            'alamat' => 'required'
        ]);
        $input = $request->all();
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . '.' . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $input['foto'] = "$profileimage";
        } else {
            unset($input['image']);
        }
        $kepalasekolah->update($input);
        return redirect()->route('kepalasekolahs.index')
            ->with('success', 'Data Telah Di Update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kepalasekolah::findOrFail($id);
        $data->delete();
        return redirect()->route('kepalasekolahs.index')
            ->with('success', 'Data Telah Di Hapus ');
    }
}
