<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\DiarioAprendizaje;
use App\Models\FichaDual;
use App\Models\Alumno;
use App\Models\Persona;

class DiarioController extends Controller
{

    public function index()
    {
        if (Gate::any(['coordinador', 'alumno', 'tuniversidad', 'tempresa'])) {

            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $alumno = Alumno::where('id_persona', $persona->id)->first();

            $ficha = FichaDual::where('id_alumno', $alumno->id)->get()->last();
            $diarios = DiarioAprendizaje::where('id_ficha', $ficha->id)->get()->sortBy('periodo');

            return view('pages.alumno.diarioaprendizaje', [
                'diarios' => $diarios
            ]);
        }
        else
            return view('errors.403');  
    }

    public function show($id)
    {
        if (Gate::any(['coordinador', 'alumno', 'tuniversidad', 'tempresa'])) {
            $alumno = Alumno::all()->where('id_persona', $id)->last();
            $fichaDual = FichaDual::all()->where('id_alumno', $alumno->id)->last();
            $diarios = DiarioAprendizaje::all()->where('id_ficha', $fichaDual->id);
            return view('pages.tutor.diarioaprendizaje', [
                'diarios' => $diarios,
                "alumno" => $alumno
            ]);
        }
        else
            return view('errors.403');

    }

    public function add()
    {
        if (Gate::allows('alumno'))
            return view('pages.alumno.creardiario');
        else
            return view('errors.403');
    }

    public function store(Request $request) {
        if (Gate::allows('alumno')) {

            // busca el alumno que ha iniciado sesion
            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $alumno = Alumno::where('id_persona', $persona->id)->first();

            // obtenre la ultima ficha dual del alumno que ha iniciado sesion
            $ficha = FichaDual::where('id_alumno', $alumno->id)->get()->last();
              
            $diario = new DiarioAprendizaje();
            $diario->periodo = $request->periodo;
            $diario->actividades = $request->actividades;
            $diario->reflexion = $request->reflexion;
            $diario->problemas = $request->problemas;
            $diario->id_ficha = $ficha->id;
            $diario->save();
            
            return redirect()->route('diarioAprendizaje');
        }
        else
            return view('errors.403');
    }

}
?>