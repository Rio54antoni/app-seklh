<?php

namespace Database\Seeders;

use App\Models\Profilsekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profilsekolah::create([
            'nama' => 'SMP N 3 Ulakan Tapakis',
            'alamat' => 'Jl.Pariaman menuju Bandara',
            'email' => 'smpn3@gmail.com',
            'notelepon' => '08567890123',
            'nss' => '1111111',
            'akreditasi' => 'A',
            'foto' => 'sma2.jpg',
        ]);
    }
}
