<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=5; $i++)
        {
            User::create([
                'username'=>"propietario{$i}",
                'email'=>"propietario{$i}@correo.com",
                'password'=>Hash::make('password123'),
                'dni'=>rand(30000000, 45000000),
                'rol_id'=>4
            ]);
        }
    }
}
