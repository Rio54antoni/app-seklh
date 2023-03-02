<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Jenisk;
use App\Models\Murid;
use DateTime;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $data = Murid::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('nis', 'LIKE', "%$keyword%")
            ->paginate(5);
        return view('murid.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agama = Agama::all();
        $jk = Jenisk::all();
        return view('murid.create', compact('agama', 'jk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'id_agama' => 'required',
            'id_jk' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tgl_masuk' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $input['foto'] = "$profileimage";
        }
        try {
            Murid::create($input);
            return redirect()->route('murids.index')
                ->with('success', 'Data Berhasil Di Tambahkan');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['message' => 'Gagal menyimpan data. Silahkan coba lagi.'])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Murid::findOrFail($id);
        $ulangtahun = new DateTime($data->tgl_lahir);
        $hariini = new DateTime('today');
        $umur = $hariini->diff($ulangtahun)->y;
        return view('murid.show', compact('data', 'umur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid)
    {
        //
    }
}
