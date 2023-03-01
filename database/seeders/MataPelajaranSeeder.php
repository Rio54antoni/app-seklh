<?php

namespace Database\Seeders;

use App\Models\Matapelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'namapelajaran' => 'Matematika',
                'jam' => 4,
            ],
            [
                'namapelajaran' => 'Fisika',
                'jam' => 3,
            ],
            [
                'namapelajaran' => 'Kimia',
                'jam' => 3,
            ],
            [
                'namapelajaran' => 'Biologi',
                'jam' => 2,
            ],
        ];

        // Looping data dan insert ke tabel mata_pelajaran
        foreach ($data as $mapel) {
            Matapelajaran::create($mapel);
        }
    }
}
