<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KelasSeeder::class);
        $this->call(MataPelajaranSeeder::class);
        $this->call(KepalaSekolahSeeder::class);
        $this->call(ProfilSekolahSeeder::class);
        $this->call(UserSeeder::class);
    }
}