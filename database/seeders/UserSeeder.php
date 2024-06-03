<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data untuk pengguna guru
        DB::table('users')->insert([
            'username' => 'kiki',
            'fullname' => 'Ibu Kiki',
            'password' => Hash::make('kikiA1'), // Kata sandi harus di-hash sebelum disimpan
            'role' => 'guru',
            'kelas' => 'A1'
        ]);

        // Menambahkan data untuk pengguna siswa
        DB::table('users')->insert([
            'username' => 'aurel',
            'fullname' => 'Aurel',
            'password' => Hash::make('A1'), // Menambahkan informasi kelas untuk siswa
            'role' => 'murid',
            'kelas' => 'A1'
        ]);
    }
}

