<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'abyanpb@gmail.com',
            'password' => Hash::make('12345'),
            'level' => 'Koordinator'
        ]);

        User::create([
            'email' => 'hendri@gmail.com',
            'password' => Hash::make('12345'),
            'level' => 'Supervisor'
        ]);

        User::create([
            'email' => 'talitha@gmail.com',
            'password' => Hash::make('12345'),
            'level' => 'Karyawan'
        ]);
    }
}

