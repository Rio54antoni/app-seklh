<?php

namespace Database\Seeders;

use App\Models\Pivot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pivot::create([
            'id_guru' => '1',
            'id_mp' => '1',
        ]);
    }
}
