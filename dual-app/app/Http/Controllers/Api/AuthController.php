<?php

namespace App\Http\Controllers\Api;

use App\Models\User; //modelo de usuario de Laravel 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //Contraseñas hash 
use Symfony\Component\HttpFoundation\Response; //El objeto response en Symfony se encarga preparar y manipular la respuesta antes de ser devuelta al cliente
use Illuminate\Validation\Rules;




class AuthController extends Controller
{
    public function login(Request $request){
        if (auth()->attempt($request->all())) { //solicitamos todos los datos () 
           return response([
            'usuario'=>auth()->user(),
            'access_token' => auth()->user()->createToken('authToken')->accessToken
           ],Response::HTTP_OK); // 200=OK
        }
        return response([
            'mensaje' => 'Este usuario no existe'
        ], Response::HTTP_UNAUTHORIZED); //401=No autorizado
    }

    public function register(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pass' => ['required', 'confirmed', Rules\Password::defaults()], // para  definir reglas de contraseña predeterminadas que puede usar en su aplicación. 
        ]);
        $user = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'pass' => Hash::make($request->password)
        ]);
        return response($user, Response::HTTP_CREATED); //201= Creado
    }



}
