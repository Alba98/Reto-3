<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Persona;
use App\Models\Docente;
use App\Models\Tuniversidad;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Evaluacion;
use App\Models\FichaDual;
use App\Models\Tempresa;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::any(['coordinador', 'tuniversidad', 'tempresa', 'alumno'])) {

            // Comprobas si se ha enviado un nombre por GET
            $personas = Persona::All()->sortBy('nombre');

            if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
                $nombre = $_GET['nombre'];
                $personas = Persona::where('nombre', 'like', '%' . $nombre . '%')->get()->sortBy('nombre');
            }  
            
            foreach ($personas  as $persona) 
                if($persona)
                    $alumnos[] = Alumno::where('id_persona', $persona->id)->get()->last();
            
            return response(view('pages.coordinador.registrosAnteriores.alumnos', [
                 'alumnos' => $alumnos
            ]));

        } else
            return response(view('errors.403')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $usuario = new User();
        $usuario->email = $request->email;
        $usuario->password = Hash::make($clave);
        $usuario->id_persona = Persona::latest('id')->first()->id;
        $usuario->tipo_usuario = 'alumno';
        $usuario->save();

        return redirect()->route('darAlta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id); 
        return response(view('pages.tutor.formaciondual',compact('alumno')));
    }

    public function alumnosTutor() {
        if (Gate::any(['tuniversidad', 'tempresa'])) {

            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $docente = Docente::where('id_persona', $persona->id)->first();
            $fichas = []; //por si este tutor no tiene alumnos asignados
            if ($docente != null) {
                $tutor = Tuniversidad::where('id_docente', $docente->id)->first();
                if (Gate::allows('tempresa'))
                    $tutor = Tempresa::where('id_docente', $docente->id)->first();
                
                if ($tutor != null)
                    $fichas = FichaDual::where('id_tuniversidad', $tutor->id)->get()->where('anio_academico','=','2022');
            }
            //where ficha dual
            return view('pages.tutor.listarAlumnos', [
                'fichas' => $fichas 
            ]);
        }
        else
            return view('errors.403');
    }

    public function alumnosTutorHistorial() {
        if (Gate::any(['tuniversidad', 'tempresa'])) {
            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $docente = Docente::where('id_persona', $persona->id)->first();
            $fichas = []; //por si este tutor no tiene alumnos asignados
            if ($docente != null) {
                $tutor = Tuniversidad::where('id_docente', $docente->id)->first();
                if (Gate::allows('tempresa'))
                    $tutor = Tempresa::where('id_docente', $docente->id)->first();
                
                if ($tutor != null)
                    $fichas = FichaDual::where('id_tuniversidad', $tutor->id)->get();
            }
            //where ficha dual
            return view('pages.tutor.listarAlumnos', [
                'fichas' => $fichas 
            ]);
        }
        else
            return view('errors.403');
    }


    public function verAlumno(Alumno $alumno)
    {
        return view('pages.tutor.formaciondual', [
            'alumno' => $alumno
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->route('registrosAlumno');
    }
}
