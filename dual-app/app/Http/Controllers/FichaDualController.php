<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Persona;
use App\Models\Alumno;
use App\Models\Tuniversidad;

class FichaDualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutores = Tuniversidad::all();
        return response(view('pages.tutor.formaciondual.Tuniversidad', [
            'tutores' => $tutores
        ]));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('registrar'))
            return response(view('errors.403')); 

        $validate = $request->validate([
            'nombre' => 'required|unique:personas|max:255',
            'ape1' => 'required|unique:personas|max:255',
            'ape2' => 'required|unique:personas|max:255',
            'dni' => 'required|unique:personas|max:255',
            'telefono' => 'required|unique:personas|max:255',
        ]);
        Persona::create($validate);

        // Hasta aquí se crea la persona, ahora se crea el usuario
        
        $tutores = new Alumno();
        $tutores->id_persona = Persona::latest('id')->first()->id;
        $tutores->curso = $request->curso;
        $tutores->id_grado = $request->id_grado;
        $tutores->dual =1;
        $tutores->save();

        // Clave con faker
        $clave = \Faker\Factory::create()->password;

        // Se crea el usuario con la clave generada por faker y el id de la persona creada
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->clave = $clave;
        $usuario->id_persona = Persona::latest('id')->first()->id;
        $usuario->tipo_usuario = 'tutores';
        $usuario->save();

        return redirect()->route('registrosAlumno');
    }
}
