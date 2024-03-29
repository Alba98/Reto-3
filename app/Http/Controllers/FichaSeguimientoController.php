<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Alumno;
use App\Models\Persona;
use App\Models\Empresa;
use App\Models\Grado;
use App\Models\User;
use App\Models\FichaDual;
use App\Models\FichaSeguimiento;


class FichaSeguimientoController extends Controller
{ 

    public function store(Alumno $alumno,Persona $persona,Empresa $empresa,Grado $grado)
    {   
       //dd($alumno);
        $fichaSeguimientos = new FichaSeguimiento();
        $fichaSeguimientos->nombre = $persona->nombre;
        $fichaSeguimientos->empresa = $empresa->empresa;
        $fichaSeguimientos->curso = $alumno->curso;
        $fichaSeguimientos->grado = $grado->grado;
        $fichaSeguimientos->email = $persona->email;
        $fichaSeguimientos->save();
        
        return redirect()->route('ficha.index');
    }

    public function index()
    {
        $fichas = FichaSeguimiento::whereYear('fecha', '=', 2023)->get();
        return view('pages.tutor.fichaseguimiento', compact('fichas'));
       
        $fichas = Persona::all();
       return view('pages.tutor.fichaseguimiento', compact('fichas'));
    }

    public function show($id)
    {
        if (Gate::any(['coordinador', 'alumno', 'tuniversidad', 'tempresa'])) {
            $alumno = Alumno::all()->where('id_persona', $id)->last();
            $fichaDual = FichaDual::all()->where('id_alumno', $alumno->id)->last();
            $fichas = FichaSeguimiento::all()->where('id_fichadual', $fichaDual->id);
            return view('pages.tutor.fichaseguimiento', [
                'fichas' => $fichas,
                "alumno" => $alumno
            ]);
        }
        else
            return view('errors.403');

    }

    public function add(Alumno $alumno)
    {
        if (Gate::allows('tuniversidad')) {
            return view('pages.tutor.crearFichaSeg', [
                "alumno" => $alumno
            ]);
        }
        else
            return view('errors.403');
    }

    public function storeFicha(Request $request, Alumno $alumno) {
        if (Gate::allows('tuniversidad')) {

            $ficha = new FichaSeguimiento();
            $ficha->fecha = date('Y-m-d');;
            $ficha->asistentes = $request->asistentes;
            $ficha->tipo_tutoria = $request->tipoT;
            $ficha->objetivos = $request->objetivos;
            $ficha->resumen = $request->resumen;
            $ficha->id_fichadual = $request->id_ficha;
            $ficha->save();
            
            $fichaDual = FichaDual::all()->where('id_alumno', $alumno->id)->last();
            $fichas = FichaSeguimiento::all()->where('id_fichadual', $fichaDual->id);
            return view('pages.tutor.fichaseguimiento', [
                'fichas' => $fichas,
                "alumno" => $alumno
            ]);

        }
        else
            return view('errors.403');
    }
}
    
 

