<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Membuat akun Administrator
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123')
        ]);
        $admin->assignRole('Administrator');

        // Membuat akun Guru
        $guru = User::create([
            'name' => 'Guru User',
            'email' => 'guru@example.com',
            'password' => bcrypt('password123')
        ]);
        $guru->assignRole('Guru');

        // Membuat akun Siswa
        $siswa = User::create([
            'name' => 'Siswa User',
            'email' => 'siswa@example.com',
            'password' => bcrypt('password123')
        ]);
        $siswa->assignRole('Siswa');
    }
}

