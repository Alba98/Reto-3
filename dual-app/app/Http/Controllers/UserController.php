<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Notificaciones;

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
            return view('pages.coordinador.asignarDual');
        else
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
        //if (Gate::any(['tuniversidad', 'tempresa']))
            return view('pages.tutor.listarAlumnos');
        // else
        //     return view('errors.403');
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
