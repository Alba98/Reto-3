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
                return view('pages.coordinador.home');
                break;
        }
    }

}
