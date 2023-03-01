<?php

namespace Database\Seeders;

use App\Models\Murid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'nama' => 'Andi',
                'nis' => '123456',
                'id_agama' => '1',
                'id_jk' => '1',
                'tgl_lahir' => '2006-01-01',
                'tempat_lahir' => 'Jakarta',
                'alamat' => 'Jl. Raya 123',
                'nohp' => '081234567890',
                'nama_ayah' => 'Budi',
                'nama_ibu' => 'Ani',
                'tgl_masuk' => now(),
                'foto' => '12132.jpg',
            ],
            [
                'nama' => 'Budi',
                'nis' => '234567',
                'id_agama' => '1',
                'id_jk' => '1',
                'tgl_lahir' => '2007-01-01',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Jl. Merdeka 456',
                'nohp' => '089876543210',
                'nama_ayah' => 'Cahyo',
                'nama_ibu' => 'Dewi',
                'tgl_masuk' => now(),
                'foto' => '1212.jpg',
            ],
        ];

        foreach ($students as $student) {
            Murid::create($student);
        }
    }
}
