<?php

namespace Database\Seeders;

use App\Models\Kepalasekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'John Doe S.Kom, M.Kom',
                'jk' => 'Laki-laki',
                'nip' => '6969871',
                'notelepon' => '08123456789',
                'foto' => 'john.jpg',
                'alamat' => 'Jl. Raya No. 123',
            ]
        ];

        foreach ($data as $p) {
            Kepalasekolah::create($p);
        }
    }
}
