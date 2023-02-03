<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RegistrosController extends Controller
{

    public function index()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.registros');
        else if (Gate::allows('alumno'))
            return view('pages.alumno.registros'); 
        else if (Gate::allows('tutor'))
            return view('pages.coordinador.registrosAnteriores.alumnos');
    }
}
?>