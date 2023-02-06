<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
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
                'anio_academico' => $faker->year(),
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
                'observacion' => $faker->text(),
                'id_ficha' => $faker->numberBetween(1, 30)
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<20;$i++){
            DB::table('evaluaciones_diario')->insert([
                'id_evaluacion' => $faker->unique()->numberBetween(1, 20),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<20;$i++){
            DB::table('evaluaciones_trabajo')->insert([
                'id_evaluacion' => $faker->unique()->numberBetween(21, 40),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            DB::table('fichas_seguimiento')->insert([
                'id_fichadual' => $faker->numberBetween(1, 30),
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
        for($i=0;$i<5;$i++){
            DB::table('coordinadores')->insert([
                'id_docente' => $faker->numberBetween(1, 20),
                'id_grado' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            DB::table('diarios_aprendizajes')->insert([
                'id_ficha' => $faker->unique()->numberBetween(1, 30),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'periodo' => $faker->date() . ' - ' . $faker->date(),
                'reflexion' => $faker->text(),
                'problemas' => $faker->text(),
                'actividades' => $faker->text()
            ]);
        }

        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            DB::table('calificaciones')->insert([
                'id_ficha' => $faker->unique()->numberBetween(1, 30),
                'id_ficha_seguimiento' => $faker->numberBetween(1, 5),
                'id_evaluacion' => $faker->numberBetween(1, 40),
                'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
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
