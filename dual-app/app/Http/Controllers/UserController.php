<?php

namespace App\Http\Controllers;

use App\Models\Docente;
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
                $ficha->save(); 
            } else {
                $ficha = new FichaDual();
                $ficha->id_alumno = $request->input('id_alumno');
                $ficha->id_empresa = $request->input('id_empresa');
                $ficha->id_tuniversidad = $request->input('id_tuniversidad');
                $ficha->id_tempresa = $request->input('id_tempresa');
                $ficha->save(); 
            }
                return redirect()->route('darAlta')->with('success', 'Alumno asignado correctamente');
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

    public function evaluar()
    {
        if (Gate::allows('tuniversidad'))
            return view('pages.alumno.evaluar');
        else
            return view('errors.403');
    }

    public function alumnos()
    {
        if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.tutor.listarAlumnos');
        else
            return view('errors.403');
    }

    public function fichaAlumno()
    {
        if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.tutor.formaciondual');
        else
            return view('errors.403');
    }

    public function fichaSeguimineto()
    {
        if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.tutor.fichaSeguimineto');
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
