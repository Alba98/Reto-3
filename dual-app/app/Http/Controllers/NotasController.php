<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\FichaDual;
use App\Models\Calificaciones;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class NotasController extends Controller
{

    public function index()
    {
        if (Auth::user()->rol == 'Alumno') {
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
    }

    public function show($id)
    {
        $diario = Calificaciones::find($id);
        return view('pages.alumno.notas', [
            'diario' => $diario
        ]);
    }

    public function add()
    {
        return view('pages.alumno.creardiario');
    }

}
?>