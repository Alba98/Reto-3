<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Persona;
use App\Models\Tuniversidad;
use App\Models\Docente;
use App\Models\FichaDual;
use App\Models\Usuario;

class TuniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuniversidad = Tuniversidad::all();
        $ficha = FichaDual::all();
        $personas = Persona::all();
        $usuarios = Usuario::all();
        return response(view('pages.coordinador.registrosAnteriores.t_universidad', [
            'tuniversidad' => $tuniversidad,
            'ficha' => $ficha,
            'personas' => $personas,
            'usuarios' => $usuarios
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre' => 'required|unique:personas|max:255',
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
        $usuario->password = $clave;
        $usuario->id_persona = Persona::latest('id')->first()->id;
        $usuario->tipo_usuario = 'tuniversidad';
        $usuario->save();

        return redirect()->route('darAlta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tuniversidad $tuniversidad) //acceso al objeto directamente
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        return redirect()->route('registrosTutorUniversidad');
    }
}
