<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FichaDual;
use App\Models\Calificaciones;



class ChartJSController extends Controller
{
    $fichas_duales= FichaDual::select('anio_academico')->all();

    $calificaciones= Calificaciones::select('avg(nota_media) as nota_media')->groupBy('id_ficha')->get();

    return response([
        'anio_academico'=>$fichas_duales,
        'notas_medias'=>$calificaciones,
    ],
    [
        'Content-Type'=>'application/json',
    ]);

}
