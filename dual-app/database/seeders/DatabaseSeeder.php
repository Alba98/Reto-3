<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);

        // GRADOS
        $faker = \Faker\Factory::create();
        for($i=0;$i<=5;$i++){
            DB::table('grados')->insert([
                'nombre' => $faker->jobTitle(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        //EMPRESAS
        $faker = \Faker\Factory::create();
        for($i=0;$i<10;$i++){
            DB::table('empresas')->insert([
                'nombre' => $faker->name(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'cif' => $faker->randomNumber(8) . $faker->randomLetter(),
                'direccion' => $faker->address(),
                'sector' => $faker->randomElement(['Agricultura', 'Alimentación', 'Automoción', 'Construcción', 'Educación', 'Energía', 'Finanzas', 'Hostelería', 'Informática', 'Medio Ambiente', 'Sanidad', 'Servicios', 'Telecomunicaciones', 'Transporte', 'Otro'])
            ]);
        }

        // COORDINADOR
        $faker = \Faker\Factory::create();
        for($i=1;$i<=5;$i++){
            DB::table('personas')->insert([
                'nombre' => $faker->name(),
                'ape1' => $faker->firstName(),
                'ape2' => $faker->firstName(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'dni' => $faker->randomNumber(8) . $faker->randomLetter(),
                'telefono' => $faker->randomNumber(8)
            ]);

            DB::table('docentes')->insert([
                'id_persona' => $i,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);

            DB::table('coordinadores')->insert([
                'id_docente' => $i,
                'id_grado' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);

            if($i == 1) {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email'=>'daw.wat2022@gmail.com',
                    'password'=> bcrypt('12345Abcde'),
                    'email_verified_at'=>now(),
                    'tipo_usuario'=>'coordinador'
                    
                ]);
            }
            else {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email' => $faker->email(),
                    'password' => Hash::make($faker->password()),
                    'tipo_usuario' => 'coordinador'
                ]);
            }
        }

        // TUTOR EMPRESA
        $faker = \Faker\Factory::create();
        for($i=6;$i<=15;$i++){
            DB::table('personas')->insert([
                'nombre' => $faker->name(),
                'ape1' => $faker->firstName(),
                'ape2' => $faker->firstName(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'dni' => $faker->randomNumber(8) . $faker->randomLetter(),
                'telefono' => $faker->randomNumber(8)
            ]);

            DB::table('docentes')->insert([
                'id_persona' => $i,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);

            DB::table('tempresa')->insert([
                'id_empresa' => $faker->unique()->numberBetween(1, 10),
                'id_docente' =>  $i,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);

            if($i == 6) {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email'=>'temp@gmail.com',
                    'password'=> bcrypt('temp'),
                    'email_verified_at'=>now(),
                    'tipo_usuario'=>'tempresa'
                    
                ]);
            }
            else {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email' => $faker->email(),
                    'password' => Hash::make($faker->password()),
                    'tipo_usuario' => 'tempresa'
                ]);
            }
        }

        // TUTOR UNIVERSIDAD
        $faker = \Faker\Factory::create();
        for($i=16;$i<=25;$i++){
            DB::table('personas')->insert([
                'nombre' => $faker->name(),
                'ape1' => $faker->firstName(),
                'ape2' => $faker->firstName(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'dni' => $faker->randomNumber(8) . $faker->randomLetter(),
                'telefono' => $faker->randomNumber(8)
            ]);

            DB::table('docentes')->insert([
                'id_persona' => $i,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);

            DB::table('tuniversidad')->insert([
                'id_docente' => $i,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);

            if($i == 16) {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email'=>'tuni@gmail.com',
                    'password'=> bcrypt('tuni'),
                    'email_verified_at'=>now(),
                    'tipo_usuario'=>'tuniversidad'
                ]);
            }
            else {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email' => $faker->email(),
                    'password' => Hash::make($faker->password()),
                    'tipo_usuario' => 'tuniversidad'
                ]);
            }
        }

        // ALUMNOS
        $faker = \Faker\Factory::create();
        for($i=26;$i<=100;$i++){
            DB::table('personas')->insert([
                'nombre' => $faker->name(),
                'ape1' => $faker->firstName(),
                'ape2' => $faker->firstName(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'dni' => $faker->randomNumber(8) . $faker->randomLetter(),
                'telefono' => $faker->randomNumber(8)
            ]);

            DB::table('alumnos')->insert([
                'id_persona' => $i,
                'id_grado' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'curso' => $faker->randomElement(['1º', '2º', '3º', '4º']),
                'dual' => $faker->randomElement(['0', '1'])
            ]);

            if($i == 26) {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email'=>'alumno@gmail.com',
                    'password'=> bcrypt('alumno'),
                    'email_verified_at'=>now(),
                    'tipo_usuario'=>'alumno'
                ]);
            }
            else {
                DB::table('users')->insert([
                    'id_persona' =>  $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'email' => $faker->email(),
                    'password' => Hash::make($faker->password()),
                    'tipo_usuario' => 'alumno'
                ]);
            }
        }

        // FICHAS DUALES
        $faker = \Faker\Factory::create();
        $x=1;
        for($i=1,$c=1;$i<=100;$i++){
            DB::table('fichas_duales')->insert([
                'id_alumno' => $faker->numberBetween(1, 75),
                'id_empresa' => $faker->numberBetween(1, 10),
                'id_tempresa' => $faker->numberBetween(1, 10),
                'id_tuniversidad' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-3 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-3 years', 'now'),
                'anio_academico' => $faker->numberBetween(2017, 2023),
                'curso' => $faker->randomElement(['1º', '2º', '3º', '4º']),
            ]);

            for($j=0;$j<$faker->numberBetween(2, 10);$j++){
                DB::table('fichas_seguimiento')->insert([
                    'id_fichadual' => $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'fecha' => $faker->dateTimeBetween('-1 years', 'now'),
                    'asistentes' => $faker->randomElement(['FA, FE', 'FA, FE, AL', 'FA, AL']),
                    'tipo_tutoria' => $faker->randomElement(['presencial', 'telefonica', 'email']),
                    'objetivos' => $faker->text(),
                    'resumen' => $faker->text()
                ]);
            }

            for($j=0;$j<$faker->numberBetween(2, 10);$j++){
                DB::table('diarios_aprendizajes')->insert([
                    'id_ficha' => $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'periodo' => $faker->date() . ' - ' . $faker->date(),
                    'reflexion' => $faker->text(),
                    'problemas' => $faker->text(),
                    'actividades' => $faker->text()
                ]);
            }

            DB::table('calificaciones')->insert([
                'id_ficha' => $i,
                'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            for($j=$x;$j<=$x+7;$j++){
                DB::table('evaluaciones')->insert([
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'valoracion' => $faker->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                    'indicador' => $faker->text(),
                    'observacion' => $faker->text()
                ]);

                DB::table('evaluaciones_diario')->insert([
                    'id_evaluacion' => $j,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'id_calificacion' => $c
                ]);
            }

            $x+=7;
            $c++;

            DB::table('calificaciones')->insert([
                'id_ficha' => $i,
                'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            for($j=$x;$j<=$x+10;$j++){
                DB::table('evaluaciones')->insert([
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'valoracion' => $faker->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                    'indicador' => $faker->text(),
                    'observacion' => $faker->text()
                ]);

                DB::table('evaluaciones_trabajo')->insert([
                    'id_evaluacion' => $j,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'id_calificacion' => $c
                ]);
            }
            //$x+=10;
        }

        
        $faker = \Faker\Factory::create();
        for($i=0;$i<200;$i++){
            DB::table('notificaciones')->insert([
                'id_usuario' => $faker->numberBetween(1, 100),
                'mensaje' => $faker->text(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
  
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run2()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class
        ]);

        $faker = \Faker\Factory::create();

        for($i=0;$i<100;$i++){
            DB::table('personas')->insert([
                'nombre' => $faker->name(),
                'ape1' => $faker->firstName(),
                'ape2' => $faker->firstName(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'dni' => $faker->randomNumber(8) . $faker->randomLetter(),
                'telefono' => $faker->randomNumber(8)
            ]);
        }

        $faker = \Faker\Factory::create();

        for($i=0;$i<5;$i++){
            DB::table('grados')->insert([
                'nombre' => $faker->jobTitle(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<10;$i++){
            DB::table('empresas')->insert([
                'nombre' => $faker->name(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'cif' => $faker->randomNumber(8) . $faker->randomLetter(),
                'direccion' => $faker->address(),
                'sector' => $faker->randomElement(['Agricultura', 'Alimentación', 'Automoción', 'Construcción', 'Educación', 'Energía', 'Finanzas', 'Hostelería', 'Informática', 'Medio Ambiente', 'Sanidad', 'Servicios', 'Telecomunicaciones', 'Transporte', 'Otro'])
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('alumnos')->insert([
                'id_persona' => $faker->unique()->numberBetween(4, 34),
                'id_grado' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'curso' => $faker->randomElement(['1º', '2º', '3º', '4º']),
                'dual' => $faker->randomElement(['0', '1'])
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<20;$i++){
            DB::table('docentes')->insert([
                'id_persona' => $faker->unique()->numberBetween(31, 51),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<100;$i++){
            DB::table('users')->insert([
                'id_persona' => $faker->unique()->numberBetween(2, 101),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'email' => $faker->email(),
                'password' => $faker->password(),
                'tipo_usuario' => $faker->randomElement(['alumno', 'tempresa', 'coordinador','tuniversidad'])
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            DB::table('tempresa')->insert([
                'id_empresa' => $faker->unique()->numberBetween(1, 10),
                'id_persona' => $faker->unique()->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            DB::table('tuniversidad')->insert([
                'id_docente' => $faker->unique()->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('fichas_duales')->insert([
                'id_alumno' => $faker->unique()->numberBetween(1, 30),
                'id_empresa' => $faker->numberBetween(1, 10),
                'id_tempresa' => $faker->numberBetween(1, 5),
                'id_tuniversidad' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'anio_academico' => $faker->numberBetween(2018, 2023),
                'curso' => $faker->randomElement(['1º', '2º', '3º', '4º']),
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<40;$i++){
            DB::table('evaluaciones')->insert([
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'valoracion' => $faker->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                'indicador' => $faker->text(),
                'observacion' => $faker->text()
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('fichas_seguimiento')->insert([
                'id_fichadual' => $faker->unique()->numberBetween(1, 30),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'fecha' => $faker->dateTimeBetween('-1 years', 'now'),
                'asistentes' => $faker->text(),
                'tipo_tutoria' => $faker->randomElement(['presencial', 'telefonica', 'email']),
                'objetivos' => $faker->text(),
                'resumen' => $faker->text()
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('diarios_aprendizajes')->insert([
                'id_ficha' => $i+1,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'periodo' => $faker->date() . ' - ' . $faker->date(),
                'reflexion' => $faker->text(),
                'problemas' => $faker->text(),
                'actividades' => $faker->text()
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('calificaciones')->insert([
                'id_ficha' => $i+1,
                //'id_ficha_seguimiento' => $i+1,
                //'id_evaluacion' => $faker->unique()->numberBetween(1, 40),
                'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('evaluaciones_diario')->insert([
                'id_evaluacion' => $i+1,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'id_calificacion' => $i+1
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<30;$i++){
            DB::table('evaluaciones_trabajo')->insert([
                'id_evaluacion' => $i+1,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'id_calificacion' => $i+1
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            DB::table('coordinadores')->insert([
                'id_docente' => $faker->numberBetween(1, 20),
                'id_grado' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        

        $faker = \Faker\Factory::create();
        for($i=0;$i<70;$i++){
            DB::table('notificaciones')->insert([
                'id_usuario' => $faker->unique()->numberBetween(1, 100),
                'mensaje' => $faker->text(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }
}
