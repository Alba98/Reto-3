<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Persona;
use App\Models\User;
use App\Models\FichaSeguimiento;
use Illuminate\Http\Request;

class FichaSeguimientoController extends Controller
{ 

    public function store(User $usu)
    {   
       //dd($alumno);
        $fichaSeguimientos = new FichaSeguimiento();
        $fichaSeguimientos->nombre = $usu->nombre;
        $fichaSeguimientos->empresa = $usu->empresa;
        $fichaSeguimientos->curso = $usu->curso;
        $fichaSeguimientos->grado = $usu->grado;
        $fichaSeguimientos->email = $usu->email;
        $fichaSeguimientos->save();
        
        return redirect()->route('ficha.index');
    }
    public function index()
    {
        $fichas = FichaSeguimiento::whereYear('fecha', '=', 2023)->get();
        return view('pages.tutor.fichaseguimiento', compact('fichas'));
       
        $fichas = User::all();
       return view('pages.tutor.fichaseguimiento', compact('fichas'));
    }
    }
    
 

