<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $agama = [
            [
                'nama' => 'Islam',
                'keterangan' => 'Agama Islam',
            ],
            [
                'nama' => 'Kristen',
                'keterangan' => ' Kristen'


            ],
            [
                'nama' => 'Katholik',
                'keterangan' => 'Katholik'
            ],
            [
                'nama' => 'Buddha',
                'keterangan' => 'Buddha'
            ],
            [
                'nama' => 'Hindu',
                'keterangan' => 'Hindu'
            ],
        ];

        Agama::insert($agama);
    }
}
