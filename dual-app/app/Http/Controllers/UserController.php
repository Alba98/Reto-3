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
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.home');
                break;
            
            case 'Alumno':
                return view('pages.alumno.home');
                break;
            
            case 'Tutor':
                return view('pages.tutor.home');
                break;
            
            default:
                return view('pages.home');
                break;
        }
    }

    public function notificaciones()
    {
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

    public function registros()
    {
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.registros');
                break;
            
            case 'Alumno':
                return view('pages.alumno.registros');
                break;
            
            case 'Tutor':
                return view('pages.tutor.registros');
                break;
            
        }
    }

    public function darAlta()
    {
        switch (Auth::user()->rol) {
            case 'Coordinador':
                return view('pages.coordinador.darAlta');
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
                return view('pages.coordinador.estadisticas');
                break;   
        }
    }

    public function diario()
    {
        switch (Auth::user()->rol) {
            case 'Alumno':
                return view('pages.alumno.diario');
                break;  
            case 'Tutor':
                #return view('pages.alumno.diario');
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
                return view('pages.alumno.alumnos');
                break; 
        }
    }
}
