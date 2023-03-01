<?php

namespace App\Http\Controllers;

use App\Models\Profilsekolah;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

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

        $data = User::all();
        return view('super_admin.user.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'level' => 'required',
            'password' => 'required'
        ]);
        User::create($request->all());
        return redirect()->route('user.index')
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
        $data = User::findOrFail($id);
        return view('super_admin.user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'level' => 'required',
            'password' => 'required'
        ]);
        $data = Status::findOrFail($id);
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect()->route('users.update')
            ->with('success', 'Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Status::findOrFail($id);
        $data->delete();
        return redirect()->route('users.index')
            ->with('success', 'Data Terhapus');
    }
}
