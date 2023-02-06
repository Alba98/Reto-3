<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Evaluacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Notificaciones;
use App\Models\Persona;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Tuniversidad;
use App\Models\Tempresa;
use App\Models\Coordinador;
use App\Models\FichaDual;
use SebastianBergmann\Environment\Console;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $id = Auth::user()->id; //id_persona->alumno->id_diario
        $notificaciones = Notificaciones::all()->where('id_usuario', $id);

        switch (Auth::user()->tipo_usuario) {
            case 'coordinador':
                return view('pages.coordinador.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            case 'alumno':
                return view('pages.alumno.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            case 'tempresa':
                return view('pages.tutor.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            case 'tuniversidad':
                return view('pages.tutor.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            default:
                return view('errors.403');
        }
    }

    public function perfil()
    {
        return view('pages.perfil');
    }

    public function notificaciones()
    {
        return view('pages.notificaciones');
    }
    
    public function asignarDual()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.asignarDual',[
                'alumnos' => Alumno::all(),
                'empresas' => Empresa::all(),
                'tuniversidad' => Tuniversidad::all(),
                'tempresa' => Tempresa::all(),
                'personas' => Persona::all(),
                'coordinadores' => Coordinador::all(),
            ]);
        else
            return view('errors.403');
    }

    public function storeDual(Request $request)
    {
        Alumno::all()->where('id',$request->input('id_alumno'))->first()->update(['dual' => 1]);
        $cursoalumno = Alumno::all()->where('id',$request->input('id_alumno'))->value('curso');
        if (Gate::allows('coordinador')) {
            // Comprobar si el coordinador esta en la tabla tuniversidad, sino meterlo VA MEDIO RARO
            if (Tuniversidad::where('id_docente',Docente::all()->where('id',$request->input('id_tuniversidad')) )->value('id') == null) {
                $tuniversidad = new Tuniversidad();
                $tuniversidad->id_docente = $request->input('id_tuniversidad');
                $tuniversidad->save();

            $ficha = new FichaDual();
            $ficha->id_alumno = $request->input('id_alumno');
            $ficha->id_empresa = $request->input('id_empresa');
            $ficha->id_tuniversidad = Tuniversidad::latest('id')->first()->id;
            $ficha->id_tempresa = $request->input('id_tempresa');
            $ficha->anio_academico = date('Y');
            $ficha->curso = $cursoalumno;
            $ficha->save(); 
        } else {
            $ficha = new FichaDual();
            $ficha->id_alumno = $request->input('id_alumno');
            $ficha->id_empresa = $request->input('id_empresa');
            $ficha->id_tuniversidad = $request->input('id_tuniversidad');
            $ficha->id_tempresa = $request->input('id_tempresa');
            $ficha->save(); 
        }
            return redirect()->route('registrosAlumno');
        } else
            return view('errors.403');
    }

    public function estadisticas()
    {
        if (Gate::allows('coordinador'))
            return view('pages.coordinador.estadisticas.stats');
        else
            return view('errors.403');
    }

    public function notas()
    {
        if (Gate::allows('alumno'))
            return view('pages.alumno.notas');
        else
            return view('errors.403');
    }

    public function evaluar(Request $request)
    {
        $alumno = Alumno::all()->where('id',$request->input('id'))->first();
        $email = User::all()->where('id_persona',$alumno->id_persona)->value('email');
        $usuarios = User::all();
        if (Gate::allows('tuniversidad'))
            return view('pages.tutor.evaluar', [
                'alumno' => $alumno,
                'email' => $email,
                'usuarios' => $usuarios
            ]);
        else
            return view('errors.403');
    }

    public function alumnos()
    {
        //if (Gate::any(['tuniversidad', 'tempresa']))
        $alumnos = Alumno::all();
        $evaluaciones = Evaluacion::all();
        $ficha = FichaDual::all();
            return view('pages.tutor.listarAlumnos', [
                'alumnos' => $alumnos,
                'evaluaciones' => $evaluaciones,
                'ficha' => $ficha
            ]);
        // else
        //     return view('errors.403');
    }

    public function fichaAlumno()
    {
        if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.tutor.listarAlumnos');
        else
            return view('errors.403');
    }

    public function fichaSeguimineto()
    {
        if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.tutor.fichaSeguimiento');
        else
            return view('errors.403');
    }

    public function evaluacionDiario()
    {
        if (Gate::allows('tuniversidad'))
            return view('pages.tutor.evaluacionDiario');
        else
            return view('errors.403');
    }

    public function evaluacionFicha()
    {
        if (Gate::allows('tuniversidad'))
            return view('pages.tutor.evaluacionFicha');
        else
            return view('errors.403');
    }
}
