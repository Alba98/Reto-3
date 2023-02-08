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
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])) {
            $id = Auth::user()->id;
            $alumno = Alumno::all()->where('id_persona', $id);
            $fichas = FichaDual::all()->where('id_alumno', $id);
            $diarios = DiarioAprendizaje::all();

            return view('pages.alumno.diarioaprendizaje', [
                'alumno' => $alumno,
                'fichas' => $fichas,
                'diarios' => $diarios
            ]);
        }  
        else if (Gate::allows('coordinador'))
            return view('errors.401');  
        else
            return view('errors.403');  
    }

    public function show($id)
    {
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])){ 
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
            $id = Auth::user()->id;
            // Creamos una variable con la id de la ficha dual del alumno que ha iniciado sesion
            $id_ficha = FichaDual::all()->where('id_alumno', $id)->last()->id;
            
            $diario = new DiarioAprendizaje();
            $diario->periodo = $request->periodo;
            $diario->actividades = $request->actividades;
            $diario->reflexion = $request->reflexion;
            $diario->problemas = $request->problemas;
            $diario->id_ficha = $id_ficha;
            $diario->save();
            return redirect()->route('diarioAprendizaje');
        }
        else
            return view('errors.403');
    }

}
?>