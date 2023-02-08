<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Persona;
use App\Models\Alumno;
use App\Models\Docente;
use App\Models\FichaDual;
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
        Alumno::all()->where('id', $request->input('id_alumno'))->first()->update(['dual' => 1]);
        $cursoalumno = Alumno::all()->where('id', $request->input('id_alumno'))->value('curso');
        if (Gate::allows('coordinador')) {
            // Comprobar si el coordinador esta en la tabla tuniversidad, sino meterlo VA MEDIO RARO
            if (Tuniversidad::where('id_docente', Docente::all()->where('id', $request->input('id_tuniversidad')))->value('id') == null) {
                $tuniversidad = new Tuniversidad();
                $tuniversidad->id_docente = $request->input('id_tuniversidad');
                $tuniversidad->save();

                $ficha = new FichaDual();
                $ficha->id_alumno = $request->input('id_alumno');
                $ficha->id_empresa = $request->input('id_empresa');
                $ficha->id_tuniversidad = Tuniversidad::latest('id')->first()->id;
                $ficha->id_tempresa = $request->input('id_tempresa');
                $ficha->anio_academico = date('Y');
                $ficha->curso = $cursoalumno;
                $ficha->save();
            } else {
                $ficha = new FichaDual();
                $ficha->id_alumno = $request->input('id_alumno');
                $ficha->id_empresa = $request->input('id_empresa');
                $ficha->id_tuniversidad = $request->input('id_tuniversidad');
                $ficha->id_tempresa = $request->input('id_tempresa');
                $ficha->save();
            }
            return redirect()->route('home');
        } else
            return view('errors.403');
    }
}
