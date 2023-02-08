<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Alumno;
use App\Models\Persona;
use App\Models\User;
use App\Models\FichaDual;
use App\Models\FichaSeguimiento;


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

    public function show($id)
    {
        if (Gate::any(['alumno', 'tuniversidad', 'tempresa'])){ 
            $alumno = Alumno::all()->where('id_persona', $id)->last();
            $fichaDual = FichaDual::all()->where('id_alumno', $alumno->id)->last();
            $fichas = FichaSeguimiento::all()->where('id_fichadual', $fichaDual->id);
            return view('pages.tutor.fichaseguimiento', [
                'fichas' => $fichas,
                "alumno" => $alumno
            ]);
        }
        else
            return view('errors.403');

    }
}
    
 

