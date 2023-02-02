<?php

namespace Database\Seeders;

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
        //Persona administradora:
        $admin = new Persona();
        $admin->tipo_usuario='coordinador';
        $admin->nombre='Alex';
        $admin->ape1='Cortes';
        $admin->ape2='Khiari';
        $admin->dni='12345';
        $admin->telefono='123456';
        $admin->save();


       $user=\App\Models\User::factory()->create([
            'email'=>'administrador@gmail.com',
            'password'=> bcrypt('admin'),
            'persona_id'=>$admin->id,
            'email_verified_at'=>nom()
       ]);
    }
}
