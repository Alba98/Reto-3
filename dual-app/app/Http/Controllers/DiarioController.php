<?php

namespace App\Http\Controllers;

use App\Models\DiarioAprendizaje;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DiarioController extends Controller
{

    public function index()
    {
        if (Auth::user()->rol == 'Alumno') {
            $id = Auth::user()->id; //id_persona->alumno->id_diario
            $id_diario = Alumno::all()->where('id_persona', $id)->fichaDual;
            $diarios = DiarioAprendizaje::all()->where('id', $id_diario);
            return view('pages.alumno.diarioaprendizaje', [
                'diarios' => $diarios
            ]);
        }   
    }

    public function show($id)
    {
        $diario = DiarioAprendizaje::find($id);
        return view('pages.tutor.diarioaprendizaje', [
            'diario' => $diario
        ]);
    }

    public function add()
    {
        return view('pages.alumno.creardiario');
    }

}
?>