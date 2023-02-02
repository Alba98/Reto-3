<?php

namespace App\Http\Controllers;

use App\Models\DiarioAprendizaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DiarioController extends Controller
{

    public function index()
    {
        if (Auth::user()->rol == 'Alumno') {
            $id = Auth::user()->id; //id_persona->alumno->id_diario
            $diarios = DiarioAprendizaje::all()->where('id', $id);
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