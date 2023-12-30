<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'pengurus',
            'email'=> 'pengurus@gmail',
            'fotopengurus' => 'ini.jpg',
            'role_id' => 2,
            'password'=> Hash::make('inipassword'),

        ]);
    }
}
