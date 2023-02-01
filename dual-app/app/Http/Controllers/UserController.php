<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // $notificaciones = Notificaciones::all()->where('id_usuario', $id);
        $notificaciones = [];

        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.home', [
                    'notificaciones' => $notificaciones
                ]);
                break;
            
            case 'Alumno':
                return view('pages.alumno.home', [
                    'notificaciones' => $notificaciones
                ]);
                break;
            
            case 'Tutor':
                return view('pages.tutor.home', [
                    'notificaciones' => $notificaciones
                ]);
                break;
            
            default:
                return view('pages.coordinador.home', [
                    'notificaciones' => $notificaciones
                ]);
                break;
        }
    }

    public function notificaciones()
    {
        return view('pages.notificaciones');

        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.notificaciones');
                break;
            
            case 'Alumno':
                return view('pages.alumno.notificaciones');
                break;
            
            case 'Tutor':
                return view('pages.tutor.notificaciones');
                break;

        }
    }
    
    public function asignarDual()
    {
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.asignarDual');
                break;   
        }
    }

    public function estadisticas()
    {
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.estadisticas.stats');
                break;   
        }
    }

    public function notas()
    {
        switch (Auth::user()->rol) {
            case 'Alumno':
                return view('pages.alumno.notas');
                break;   
        }
    }

    public function evaluar()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.alumno.evaluar');
                break; 
        }
    }

    public function alumnos()
    {
        switch (Auth::user()->rol) {
            case 'Tutor':
                return view('pages.tutor.listarAlumnos');
                break; 
        }
    }
}
