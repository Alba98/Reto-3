<?php

namespace App\Http\Controllers;

use App\Models\Notificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class NotificacionesController extends Controller
{

    public function index()
    {
        
        $id = Auth::user()->id; //id_persona->alumno->id_diario
        $notificaciones = Notificaciones::all()->where('id_usuario', $id);

        return view('pages.notificaciones', [
           'notificaciones' => $notificaciones
        ]);
         
    }
    
}
?>