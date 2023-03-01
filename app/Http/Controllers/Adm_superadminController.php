<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Kepalasekolah;
use App\Models\Matapelajaran;
use App\Models\Profilsekolah;
use Illuminate\Http\Request;

class Adm_superadminController extends Controller
{
    // public function __construct()
    // {
    //     // Middleware untuk semua method di controller
    //     $this->middleware('');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahmp = Matapelajaran::count();
        $kepalasklh = Kepalasekolah::count();
        $jumlahk = Kelas::count();
        $jumlahg = Guru::count();
        $data = Profilsekolah::all();


        return view('super_admin.dashboard', compact(
            'data',
            'kepalasklh',
            'jumlahmp',
            'jumlahk',
            'jumlahg'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function akses()
    {

        return view('super_admin.akses');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
