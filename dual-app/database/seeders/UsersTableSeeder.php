<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'email' => 'admin@gmail.com',
            'clave' => Hash::make('password'),
            'id_persona'=>1,
            'tipo_usuario'=>2

        ]);
       
    }
}
