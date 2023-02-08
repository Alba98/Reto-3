<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;


use App\Models\Notificaciones;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notificaciones = Notificaciones::all()->where('id_usuario', Auth::user()->id);

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
            return view('home');
        }  
    }
}
