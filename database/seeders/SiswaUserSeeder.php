<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiswaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            'name' => 'Iksan Fauzi',
            'nisn' => '192010213',
            'email' => 'iksan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'siswa'
        ];

        User::create($siswa);
    }
}
