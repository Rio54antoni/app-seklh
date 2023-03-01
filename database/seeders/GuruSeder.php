<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nama' => 'John Doe',
            'nip' => '1234567890',
            'id_agama' => 1,
            'id_jabatan' => 1,
            'id_jk' => 1,
            'id_status' => 1,
            'id_kelas' => 1,
            'id_mp' => 1,
            'email' => 'johndoe@example.com',
            'alamat' => 'Jl. Sudirman No. 123',
            'notelepon' => '081234567890',
            'foto' => 1,
        ]);

        Guru::create([
            'nama' => 'Jane Smith',
            'nip' => '0987654321',
            'id_agama' => 2,
            'id_jabatan' => 2,
            'id_jk' => 2,
            'id_status' => 1,
            'id_kelas' => 1,
            'id_mp' => 1,
            'email' => 'janesmith@example.com',
            'alamat' => 'Jl. Thamrin No. 456',
            'notelepon' => '081234567891',
            'foto' => 2,
        ]);
    }
}
