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
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.darAlta');
        else
            return view('errors.403');        
    }

    public function grado()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.darAlta.grado');
        else
            return view('errors.403');     
    }

    public function alumno()
    {
        if (Gate::allows('coordinador')){
            $grados = Grado::all();
            return view('pages.coordinador.darAlta.alumno', [
                'grados' => $grados
            ]);
        }
        else
            return view('errors.403');     
    }

    public function empresa()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.darAlta.empresa');
        else
            return view('errors.403');     
        
    }

    public function tutorEmpresa()
    {
        if (Gate::allows('coordinador')) {
            $empresas = Empresa::all();
            return view('pages.coordinador.darAlta.t_empresa', [
                'empresas' => $empresas
            ]);
        }
        else
            return view('errors.403');  
    }

    public function tutorUniversidad()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.darAlta.t_universidad');
        else
            return view('errors.403'); 
    }

    public function coordinador()
    {
        if (Gate::allows('coordinador')) {
            $grados = Grado::all();
            return view('pages.coordinador.darAlta.coordinador', [
                'grados' => $grados
            ]);
        }
        else
            return view('errors.403'); 
    }
}
?>