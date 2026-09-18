<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create(['perfil'=>'cliente']);
        Rol::create(['perfil'=>'agente']);
        Rol::create(['perfil'=>'admin']);
        Rol::create(['perfil'=>'propietario']);
    }
}
