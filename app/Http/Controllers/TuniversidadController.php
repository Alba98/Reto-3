<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\FichaSeguimiento;
use App\Models\User;
use App\Models\Persona;
use App\Models\Tuniversidad;
use App\Models\Docente;
use App\Models\FichaDual;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class TuniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::All()->sortBy('nombre');

        foreach ($personas  as $persona) 
            if($persona)
                $docentes[] = Docente::where('id_persona', $persona->id)->get()->last();

        foreach ($docentes  as $docente)
            if($docente)
                $tutores[] = Tuniversidad::where('id_docente', $docente->id)->get()->last();


        return response(view('pages.coordinador.registrosAnteriores.t_universidad', [
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
        $tuniversidad = new Tuniversidad();
        $tuniversidad->id_docente = Docente::latest('id')->first()->id;
        $tuniversidad->save();

        // Clave con faker
        $clave = \Faker\Factory::create()->password;

        // Se crea el usuario con la clave generada por faker y el id de la persona creada
        $usuario = new User();
        $usuario->email = $request->email;
        $usuario->password = Hash::make($clave);
        $usuario->id_persona = Persona::latest('id')->first()->id;
        $usuario->tipo_usuario = 'tuniversidad';
        $usuario->save();

        return redirect()->route('darAlta');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $tuniversidad = Tuniversidad::find($id);
        
        $tuniversidad->delete();
        return redirect()->route('tuniversidad.show');
    }

    public function show($id)
    {
        $docente = Docente::where('id_persona', $id)->first();
        $fichas = []; //por si este tutor no tiene alumnos asignados
        if ($docente != null) {
            $tutor = Tuniversidad::where('id_docente', $docente->id)->first();
            if (Gate::allows('tempresa'))
                $tutor = Tempresa::where('id_docente', $docente->id)->first();
            
            if ($tutor != null)
                $fichas = FichaDual::where('id_tuniversidad', $tutor->id)->get();
        }
        //where ficha dual
        return view('pages.tutor.listarAlumnos', [
            'fichas' => $fichas 
        ]);

    }
}
