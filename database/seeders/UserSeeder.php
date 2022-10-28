<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'username' => 'rissasria',
        //     'level' => 'security',
        //     'password' => bcrypt ('123'),
        //     'remember_token' => Str::random(60),
        // ]);

        // User::create([
        //     'username' => 'monicasandrak',
        //     'level' => 'klinik',
        //     'password' => bcrypt ('123'),
        //     'remember_token' => Str::random(60),
        // ]);

        // User::create([
        //     'username' => 'rissasria',
        //     'level' => 'security',
        //     'password' => bcrypt ('123'),
        //     'remember_token' => Str::random(60),
        // ]);

        User::create([
            'username' => 'admin123',
            'level' => 'admin',
            'password' => bcrypt ('123'),
            'remember_token' => Str::random(60),
        ]);
    }
    }
