<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Evaluacion;
use App\Models\FichaDual;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RegistrosController extends Controller
{

    public function index()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.registros');
        else if (Gate::allows('alumno')) {
            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $alumno = Alumno::where('id_persona', $persona->id)->first();
            $fichas = FichaDual::where('id_alumno', $alumno->id)->get();
            
            //where ficha dual
            return view('pages.alumno.registros', [
                'fichas' => $fichas
            ]);
        }
        else if (Gate::allows('tutor'))
            return view('pages.coordinador.registrosAnteriores.alumnos');
    }
}
?>