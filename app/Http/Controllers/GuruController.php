<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\Jenisk;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Profilsekolah;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $perPage = 2;
        $keyword = $request->input('keyword');
        $data = Guru::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('nip', 'LIKE', "%$keyword%")
            ->paginate(2);
        // di bawah ini codingan lama
        // $data = Guru::with(
        //     'agama',
        //     'jeniskelamin',
        //     'status',
        //     'jabatan',
        //     'kelas',
        //     'matapelajaran'
        // )
        //     ->when($keyword, function ($query, $keyword) {
        //         $query->whereHas('kelas', function ($query) use ($keyword) {
        //             $query->where('namakelas', 'like', "%$keyword%");
        //         })
        //             ->orWhere('nama', 'like', "%$keyword%");
        //     })
        //     ->paginate($perPage);
        return view('guru.index', compact('data'));
    }


    public function create()
    {

        $agama = Agama::all();
        $jabatan = Jabatan::all();
        $jk = Jenisk::all();
        $status = Status::all();
        $kelas = Kelas::all();
        $mp = Matapelajaran::all();

        return view('guru.create', compact(
            'agama',
            'jabatan',
            'jk',
            'status',
            'kelas',
            'mp'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'notelepon' => 'required',
            'alamat' => 'required',
            'id_agama' => 'required',
            'id_jk' => 'required',
            'id_jabatan' => 'required',
            'id_kelas' => 'required',
            'id_mp' => 'required',
            'id_status' => 'required',
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
            Guru::create($input);
            return redirect()->route('users.index')
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

        $data = Guru::findOrFail($id);
        return view('guru.show', compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Guru::findOrFail($id);
        $agama = Agama::all();
        $jabatan = Jabatan::all();
        $jk = Jenisk::all();
        $status = Status::all();
        $kelas = Kelas::all();
        $mp = Matapelajaran::all();

        return view('guru.edit', compact(
            'data',
            'agama',
            'jabatan',
            'jk',
            'status',
            'kelas',
            'mp'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'notelepon' => 'required',
            'alamat' => 'required',
            'id_agama' => 'required',
            'id_jk' => 'required',
            'id_jabatan' => 'required',
            'id_kelas' => 'required',
            'id_mp' => 'required',
            'id_status' => 'required',
            'tgl_masuk' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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
        $guru->update($input);
        return redirect()->route('gurus.index')
            ->with('success', 'Data Telah Di Update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('gurus.index')
            ->with('success', 'Data Telah Di Hapus ');
    }
}
