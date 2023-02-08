<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Models\Persona;
use App\Models\Alumno;
use App\Models\FichaDual;

class RegistrosController extends Controller
{

    public function index()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.registros');
        else if (Gate::allows('alumno')) {
            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $alumno = Alumno::where('id_persona', $persona->id)->first();
            $fichas = FichaDual::where('id_alumno', $alumno->id)->get()->sortByDesc('anio_academico');
           
            //where ficha dual
            return view('pages.alumno.registros', [
                'fichas' => $fichas
            ]);
        }
        else if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.coordinador.registrosAnteriores.alumnos');
    }
}
?>