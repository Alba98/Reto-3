<?php

namespace App\Http\Controllers;
use App\Models\FichaSeguimiento;
use Illuminate\Http\Request;

class FichaSeguimientoController extends Controller
{ 

    public function store(Request $request)
    {
        $fichaSeguimiento = new FichaSeguimiento();
        $fichaSeguimiento->nombre = $request->nombre;
        $fichaSeguimiento->empresa = $request->empresa;
        $fichaSeguimiento->curso = $request->curso;
        $fichaSeguimiento->grado = $request->grado;
        $fichaSeguimiento->email = $request->email;
        $fichaSeguimiento->save();
        
        return redirect()->route('ficha.index');
    }
    public function index()
    {
        $fichas = FichaSeguimiento::all();
        return view('pages.tutor.fichaseguimiento',compact('fichas'));
    }
    
 
}
