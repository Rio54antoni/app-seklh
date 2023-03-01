<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'nama' => 'Guru Tetap',
                'keterangan' => 'Guru yang diangkat dengan status tetap di sekolah'
            ],
            [
                'nama' => 'Guru Kontrak',
                'keterangan' => 'Guru yang diangkat dengan status kontrak di sekolah'
            ],
            [
                'nama' => 'Karyawan Tetap',
                'keterangan' => 'Karyawan yang diangkat dengan status tetap di sekolah'
            ],
            [
                'nama' => 'Karyawan Kontrak',
                'keterangan' => 'Karyawan yang diangkat dengan status kontrak di sekolah'
            ],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
