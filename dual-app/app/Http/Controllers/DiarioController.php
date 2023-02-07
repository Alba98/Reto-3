<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\DiarioAprendizaje;
use App\Models\FichaDual;
use App\Models\Alumno;

class DiarioController extends Controller
{

    public function index()
    {
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])) {
            $id = Auth::user()->id;
            // $diarios = Alumno::all()->where('id_persona', $id);
            // $diarios = Alumno::all()->where('id_persona', $id)->fichasDuales->last();
            // $diarios = $fichasDuales->diariosAprendizajes;
            // $diarios = Alumno::all()->where('id_persona', $id)->fichaDual->diariosAprendizajes;

            //$diarios = DiarioAprendizaje::all()->where('id_ficha', $id);
            // return view('pages.alumno.diarioaprendizaje', [
            //     'diarios' => $diarios
            // ]);

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
        //alguien que me exploque xq se supone que ahora soy coordiador si estoy como alumno ????
            return view('errors.401');  
        else
            return view('errors.403');  
    }

    public function show($id)
    {
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])){ 
            $diario = DiarioAprendizaje::find($id);
            return view('pages.tutor.diarioaprendizaje', [
                'diario' => $diario
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
            // creame una variable con la id del alumno que ha iniciado sesion
            $id = Auth::user()->id;
            // busca el alumno que ha iniciado sesion
            $alumno = Alumno::all()->where('id', $id);

            // reame una variable con la id de la ficha dual del alumno que ha iniciado sesion
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