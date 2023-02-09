<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\FichaSeguimiento;
use App\Models\User;
use App\Models\Persona;
use App\Models\Tempresa;
use App\Models\Docente;
use App\Models\FichaDual;
use App\Models\Alumno;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;

class TempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        $personas = Persona::All()->sortBy('nombre');

        foreach ($personas  as $persona) 
            if($persona)
                $docentes[] = Docente::where('id_persona', $persona->id)->get()->last();

        foreach ($docentes  as $docente)
            if($docente) {
                $tutores[] = Tempresa::where('id_docente', $docente->id)->where('id_empresa', $empresa->id)->get()->last();
            }

        return response(view('pages.coordinador.registrosAnteriores.t_empresa', [
            'empresa' => $empresa->nombre,
            'tutores' => $tutores,
            'fichas' => FichaDual::all()
        ]));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:255',
            'ape1' => 'required|unique:personas|max:255',
            'ape2' => 'required|unique:personas|max:255',
            'dni' => 'required|unique:personas|max:255',
            'telefono' => 'required|unique:personas|max:255',
        ]);
        Persona::create($validate);

        // Hasta aquí se crea la persona, ahora se crea el docente
        $docente = new Docente();
        $docente->id_persona = Persona::latest('id')->first()->id;
        $docente->save();

        // Se crea el tutor empresa
        $tempresa = new Tempresa();
        $tempresa->id_docente = Docente::latest('id')->first()->id;
        $tempresa->id_empresa = $request->id_empresa;
        $tempresa->save();

        // Clave con faker
        $clave = \Faker\Factory::create()->password;

        // Se crea el usuario con la clave generada por faker y el id de la persona creada
        $usuario = new User();
        $usuario->email = $request->email;
        $usuario->password = Hash::make($clave);
        $usuario->id_persona = Persona::latest('id')->first()->id;
        $usuario->tipo_usuario = 'tempresa';
        $usuario->save();

        return redirect()->route('darAlta');
    }
    public function verAlumnos()
    {
        $fichas = Alumno::where('curso', true)->get();

        return view('pages.tutor.listarAlumnos', compact('fichas'));
    }

    public function destroy($id)
    {   
        $temp = Tempresa::find($id);
        $temp->delete();
        return redirect()->route('registrosEmpresa');
    }

    public function showAlumnos($id)
    {
        $docente = Docente::where('id_persona', $id)->first();
        $fichas = []; //por si este tutor no tiene alumnos asignados
        if ($docente != null) {
            $tutor = Tempresa::where('id_docente', $docente->id)->first();
                
            if ($tutor != null)
                $fichas = FichaDual::where('id_tempresa', $tutor->id)->get();
        }

        //where ficha dual
        return view('pages.tutor.listarAlumnos', [
            'fichas' => $fichas 
        ]);

    }
    
}
