<?php

namespace Database\Seeders;

use App\Models\Kelasguru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasguruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelasguru::create([
            'id_kelas' => '1',
            'id_guru' => '1',
            'tahun_ajaran' => '2022/2023'
        ]);
    }
}
