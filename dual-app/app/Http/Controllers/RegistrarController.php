<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

// Modelos
use App\Models\Grado;
use App\Models\Empresa;

class RegistrarController extends Controller
{

    public function index()
    {
    //    if (Gate::allows('isCoordinador')) {
    //         return view('pages.coordinador.darAlta');
    //     } else {
    //         return view('errors.403');
    //     }

        if (Auth::user()->rol == 'Coordinador')
            return view('pages.coordinador.darAlta');
        
    }

    public function grado()
    {
        return view('pages.coordinador.darAlta.grado');
    }

    public function alumno()
    {
        $grados = Grado::all();
        return view('pages.coordinador.darAlta.alumno', [
            'grados' => $grados
        ]);
    }

    public function empresa()
    {
        return view('pages.coordinador.darAlta.empresa');
    }

    public function tutorEmpresa()
    {
        $empresas = Empresa::all();
        return view('pages.coordinador.darAlta.t_empresa', [
            'empresas' => $empresas
        ]);
    }

    public function tutorUniversidad()
    {
        return view('pages.coordinador.darAlta.t_universidad');
    }

    public function coordinador()
    {
        $grados = Grado::all();
        return view('pages.coordinador.darAlta.coordinador', [
            'grados' => $grados
        ]);
    }
}
?>