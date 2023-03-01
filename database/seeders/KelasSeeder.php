<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'namakelas' => 'Kelas A',
                'keterangan' => 'Kelas dengan tingkat kesulitan tinggi',
            ],
            [
                'namakelas' => 'Kelas B',
                'keterangan' => 'Kelas dengan tingkat kesulitan sedang',
            ],
            [
                'namakelas' => 'Kelas C',
                'keterangan' => 'Kelas dengan tingkat kesulitan rendah',
            ],
        ];
        foreach ($data as $kelas) {
            Kelas::create($kelas);
        }
    }
}
