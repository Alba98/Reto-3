<?php

namespace App\Http\Controllers;

use App\Models\Notificaciones;
use App\Models\Persona;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class NotificacionesController extends Controller
{

    public function index()
    {
        $notificaciones = Notificaciones::all()->where('id_usuario', Auth::User()->id);

        if (Gate::allows('alumno')) {
            $persona = Persona::where('id', Auth::user()->id_persona)->first();
            $alumno = Alumno::where('id_persona', $persona->id)->first();
            return view('pages.notificaciones', [
                'notificaciones' => $notificaciones,
                'dual' => ($alumno->fichaDual) ? true : false
            ]);
        } else {
            return view('pages.notificaciones', [
                'notificaciones' => $notificaciones,
                'dual' => false
            ]);
        }
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notificacion = Notificaciones::find($id);
        $notificacion->delete();
        return redirect(route('notificaciones'));
    }
    
}
?>