<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\FichaSeguimiento;
use Illuminate\Http\Request;

class FichaSeguimientoController extends Controller
{ 

    public function store(Alumno $alumno)
    {
        $fichaSeguimiento =new FichaSeguimiento();
        $fichaSeguimiento->nombre = $alumno->nombre;
        $fichaSeguimiento->empresa = $alumno->empresa;
        $fichaSeguimiento->curso = $alumno->curso;
        $fichaSeguimiento->grado = $alumno->grado;
        $fichaSeguimiento->email = $alumno->email;
        $fichaSeguimiento->save();
        
        return redirect()->route('ficha.index');
    }
    public function index()
    {

        $fichas = FichaSeguimiento::all();
        return view('pages.tutor.fichaseguimiento', compact('fichas'));
    }
    }
    
 

