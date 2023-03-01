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
        $this->call(UserSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(JenisSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MataPelajaranSeeder::class);
        $this->call(KepalaSekolahSeeder::class);
        $this->call(ProfilSekolahSeeder::class);
        $this->call(MuridSeeder::class);
        $this->call(GuruSeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(PivotSeeder::class);
        $this->call(KelasguruSeeder::class);
    }
}
