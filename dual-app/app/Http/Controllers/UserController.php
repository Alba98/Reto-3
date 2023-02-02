<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
            case 'Coordinador':
                return view('pages.coordinador.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            case 'Alumno':
                return view('pages.alumno.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            case 'Tutor':
                return view('pages.tutor.home', [
                    'notificaciones' => $notificaciones
                ]);
            
            default:
                return view('home', [
                    'notificaciones' => $notificaciones
                ]);
        }
    }

    public function perfil()
    {
        return view('pages.perfil');
    }

    public function notificaciones()
    {
        return view('pages.notificaciones');

        // switch (Auth::user()->rol) {
        //     case 'Coordinador':
        //         return view('pages.coordinador.notificaciones');
        //         break;
            
        //     case 'Alumno':
        //         return view('pages.alumno.notificaciones');
        //         break;
            
        //     case 'Tutor':
        //         return view('pages.tutor.notificaciones');
        //         break;

        // }
    }
    
    public function asignarDual()
    {
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.asignarDual');
        }
    }

    public function estadisticas()
    {
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.estadisticas.stats');
        }
    }

    public function notas()
    {
        switch (Auth::user()->rol) {
            case 'Alumno':
                return view('pages.alumno.notas');
        }
    }

    public function evaluar()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.alumno.evaluar');
        }
    }

    public function alumnos()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.tutor.listarAlumnos');
        }
    }

    public function fichaAlumno()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.tutor.formaciondual');
        }
    }

    public function fichaSeguimineto()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.tutor.fichaseguimiento');  
        }
    }

    public function evaluacionDiario()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.tutor.evaluacionDiario');  
        }
    }

    public function evaluacionFicha()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.tutor.evaluacionFicha');
                break;   
        }
    }
}
