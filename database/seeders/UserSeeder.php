<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'level' => 'super_admin',
            'password' => Hash::make('123456'),
            'foto' => '123.jpg'
        ]);
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => Hash::make('1234567'),
            'foto' => '123.jpg'
        ]);
        User::create([
            'nama' => 'User',
            'email' => 'user@gmail.com',
            'level' => 'user',
            'password' => Hash::make('12345678'),
            'foto' => '123.jpg'
        ]);
    }
}
