<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Persona;
use App\Models\User;
use App\Models\FichaSeguimiento;
use Illuminate\Http\Request;

class FichaSeguimientoController extends Controller
{ 

    public function store(Alumno $alumno,Persona $persona,Empresa $empresa,Grado $grado)
    {   
       //dd($alumno);
        $fichaSeguimientos = new FichaSeguimiento();
        $fichaSeguimientos->nombre = $persona->nombre;
        $fichaSeguimientos->empresa = $empresas->empresa;
        $fichaSeguimientos->curso = $alumno->curso;
        $fichaSeguimientos->grado = $grado->grado;
        $fichaSeguimientos->email = $persona->email;
        $fichaSeguimientos->save();
        
        return redirect()->route('ficha.index');
    }
    public function index()
    {
        $fichas = FichaSeguimiento::whereYear('fecha', '=', 2023)->get();
        return view('pages.tutor.fichaseguimiento', compact('fichas'));
       
        $fichas = Persona::all();
       return view('pages.tutor.fichaseguimiento', compact('fichas'));
    }
}
    
 

