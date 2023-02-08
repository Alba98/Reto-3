<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Persona;
use App\Models\Alumno;
use App\Models\FichaDual;
use App\Models\Calificaciones;
use App\Models\Empresa;


class NotasController extends Controller
{

    public function index()
    {
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])) {
            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $alumno = Alumno::where('id_persona', $persona->id)->first();
            $fichas = FichaDual::where('id_alumno', $alumno->id)->get();
            
            //where ficha dual
            return view('pages.alumno.notas', [
                'fichas' => $fichas 
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
            $diario = Calificaciones::find($id);
            return view('pages.alumno.notas', [
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

}
?>