<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RegistrosController extends Controller
{

    public function index()
    {
        if (Auth::user()->rol == 'Coordinador')
            return view('pages.coordinador.registros');
        else if (Auth::user()->rol == 'Alumno')
            return view('pages.alumno.registros'); 
        else if (Auth::user()->rol == 'Tutor')  
            return view('pages.coordinador.registrosAnteriores.alumnos');
    }

    public function alumno()
    {
        return view('pages.coordinador.registrosAnteriores.alumnos');
    }

    public function empresa()
    {
        return view('pages.coordinador.registrosAnteriores.empresas');
    }

    public function tutorEmpresa()
    {
        return view('pages.coordinador.registrosAnteriores.t_empresa');
    }

    public function tutorUniversidad()
    {
        return view('pages.coordinador.registrosAnteriores.t_universidad');
    }

    public function coordinador()
    {
        return view('pages.coordinador.registrosAnteriores.coordinadores');
    }
}
?>