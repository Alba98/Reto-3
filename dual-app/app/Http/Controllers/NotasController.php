<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Alumno;
use App\Models\FichaDual;
use App\Models\Calificaciones;
use App\Models\Empresa;


class NotasController extends Controller
{

    public function index()
    {
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])) {
            $id = Auth::user()->id; //id_persona->alumno->id_diario

            // $id_diario = Alumno::find($id)->id;
            // $calificaciones = Calificaciones::all()->where('id_ficha', $id_diario);
            // return view('pages.alumno.notas', [
            //     'calificaciones' => $calificaciones
            // ]);

            $alumno = Alumno::all()->where('id_persona', $id);
            $fichas = FichaDual::all()->where('id_alumno', $id);
            $calificacion = Calificaciones::all();
            $empresas = Empresa::all();

            return view('pages.alumno.notas', [
                'alumno' => $alumno,
                'fichas' => $fichas,
                'calificaciones' => $calificacion,
                'empresas' => $empresas
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