<?php

namespace App\Http\Controllers;

use App\Models\Profilsekolah;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::all();
        return view('super_admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $level = [
            [
                'nama' => 'admin'
            ],
            [
                'nama' => 'kepala_sekolah'
            ],
            [
                'nama' => 'guru'
            ],
            [
                'nama' => 'murid'
            ],
        ];
        return view('super_admin.user.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'level' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'nama.required' => 'Nama user tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'level.required' => 'Pilih salah satu role akun',
            'password.required' => 'Password harap diisi',
            'password_confirmation.required' => 'Konfirmasi password harap diisi',
            'foto.required' => 'Format file tidak didukung'
        ]);
        $input = $request->except('password_confirmation');
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $input['foto'] = "$profileimage";
        } else {
            $input['foto'] = null;
        }
        try {
            User::create($input);
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
        $data = User::findOrFail($id);
        return view('super_admin.user.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        $level = [
            [
                'nama' => 'admin'
            ],
            [
                'nama' => 'kepala_sekolah'
            ],
            [
                'nama' => 'guru'
            ],
            [
                'nama' => 'murid'
            ],
        ];
        return view('super_admin.user.edit', compact('data', 'level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'level' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'nama.required' => 'Nama user tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'level.required' => 'Pilih salah satu level akun',
            'foto.required' => 'Format file tidak didukung'
        ]);
        $user = User::findOrFail($id);
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . '.' . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileimage);
            $user['foto'] = "$profileimage";
        }
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->level = $request->level;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.index')
            ->with('success', 'Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('users.index')
            ->with('success', 'Data Terhapus');
    }
}
