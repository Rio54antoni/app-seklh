<?php

namespace App\Http\Controllers\Super_admin;

use Illuminate\Http\Request;
use App\Models\Profilsekolah;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Matapelajaran;

class ProfilsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Profilsekolah::all();
        return view('super_admin.profil_sekolah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('super_admin.profil_sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'notelepon' => 'required',
            'nss' => 'required',
            'akreditasi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $input = $request->all();

        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $input['foto'] = "$profileimage";
        }
        Profilsekolah::create($input);
        // dd($input);
        return redirect()->route('profilsekolahs.index')
            ->with('success', 'Data Sukses Tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $data = Profilsekolah::findOrFail($id);
        return view('super_admin.profil_sekolah.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Profilsekolah::findOrFail($id);
        return view('super_admin.profil_sekolah.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profilsekolah $profilsekolah)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'notelepon' => 'required',
            'nss' => 'required',
            'akreditasi' => 'required'
        ]);
        $input = $request->all();
        // if ($foto = $request->file('foto')) {
        //     $destinationPath = 'image/';
        //     $profileimage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
        //     $foto->move($destinationPath, $profileimage);
        //     $input['foto'] = "$profileimage";
        // }
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . '.' . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $input['foto'] = "$profileimage";
        } else {
            unset($input['image']);
        }
        $profilsekolah->update($input);
        return redirect()->route('profilsekolahs.index')
            ->with('success', 'Data Telah Di Update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Profilsekolah::findOrFail($id);
        $data->delete();
        return redirect()->route('profilsekolahs.index')
            ->with('success', 'Data Telah Di Hapus ');
    }
}
