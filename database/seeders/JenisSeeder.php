<?php

namespace Database\Seeders;

use App\Models\Jenisk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Laki-laki',
            ],
            [
                'nama' => 'Perempuan',
            ],
        ];
        foreach ($data as $jenis) {
            Jenisk::create($jenis);
        }
    }
}
