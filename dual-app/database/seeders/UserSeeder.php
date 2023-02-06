<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

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
        $admin->nombre='Coordinador';
        $admin->ape1='Coor1';
        $admin->ape2='Coor2';
        $admin->dni='12345';
        $admin->telefono='123456';
        $admin->save();


       $user=\App\Models\User::factory()->create([
            'email'=>'administrador@gmail.com',
            'password'=> bcrypt('admin'),
            'id_persona'=>$admin->id,
            'email_verified_at'=>now(),
            'tipo_usuario'=>'coordinador'
       ]);

       // Persona tutor de universidad
        $tuni = new Persona();
        $tuni->nombre='Tutor de Universidad';
        $tuni->ape1='Uni1';
        $tuni->ape2='Uni2';
        $tuni->dni='123456';
        $tuni->telefono='1234567';
        $tuni->save();

        $user2=\App\Models\User::factory()->create([
            'email'=>'tuni@gmail.com',
            'password'=> bcrypt('tuni'),
            'id_persona'=>$tuni->id,
            'email_verified_at'=>now(),
            'tipo_usuario'=>'tuniversidad'
         ]);

        // Persona tutor de empresa
        $temp = new Persona();
        $temp->nombre='Tutor de Empresa';
        $temp->ape1='Emp1';
        $temp->ape2='Emp2';
        $temp->dni='12345678';
        $temp->telefono='12345678';
        $temp->save();

        $user3=\App\Models\User::factory()->create([
            'email'=>'temp@gmail.com',
            'password'=> bcrypt('temp'),
            'id_persona'=>$temp->id,
            'email_verified_at'=>now(),
            'tipo_usuario'=>'tempresa'
        ]);

        // Persona alumno
        $alumno = new Persona();
        $alumno->nombre='Alumno';
        $alumno->ape1='Alu1';
        $alumno->ape2='Alu2';
        $alumno->dni='123456789';
        $alumno->telefono='123456789';
        $alumno->save();

        $user4=\App\Models\User::factory()->create([
            'email'=>'alumno@gmail.com',
            'password'=> bcrypt('alumno'),
            'id_persona'=>$alumno->id,
            'email_verified_at'=>now(),
            'tipo_usuario'=>'alumno'
        ]);
    }
}
