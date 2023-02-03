<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Persona;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Evaluacion;
use App\Models\FichaDual;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::any(['coordinador', 'tuniversidad', 'tempresa'])) {
            $alumnos = Alumno::all();
            $empresas = Empresa::all();
            $evaluaciones = Evaluacion::all();
            $ficha = FichaDual::all();
            return response(view('pages.coordinador.registrosAnteriores.alumnos', [
                'alumnos' => $alumnos,
                'empresas' => $empresas,
                'evaluaciones' => $evaluaciones,
                'ficha' => $ficha
            ]));
        }
        else
            return view('errors.403'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::User()->cannot('registrar'))
            return view('errors.403'); 

        $validate = $request->validate([
            'nombre' => 'required|unique:personas|max:255',
            'ape1' => 'required|unique:personas|max:255',
            'ape2' => 'required|unique:personas|max:255',
            'dni' => 'required|unique:personas|max:255',
            'telefono' => 'required|unique:personas|max:255',
        ]);
        Persona::create($validate);

        // Hasta aquí se crea la persona, ahora se crea el usuario
        
        $alumno = new Alumno();
        $alumno->id_persona = Persona::latest('id')->first()->id;
        $alumno->curso = $request->curso;
        $alumno->id_grado = $request->id_grado;
        $alumno->dual = 0;
        $alumno->save();

        // Clave con faker
        $clave = \Faker\Factory::create()->password;

        // Se crea el usuario con la clave generada por faker y el id de la persona creada
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->clave = $clave;
        $usuario->id_persona = Persona::latest('id')->first()->id;
        $usuario->tipo_usuario = 'alumno';
        $usuario->save();

        return redirect()->route('registrosAlumno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::where('id',$id)->firstOrFail(); //get sirve para coger una coleccion. firstOrFail el primer elemento que va a encontrar en la base de datos y si no error 404.
        //return $alumno->persona;
        return view('pages.tutor.formaciondual',compact('alumno')); //compact pasa un array con variables. ('var1','var2'...)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
