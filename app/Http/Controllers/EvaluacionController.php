<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Evaluacion;
use App\Models\Calificaciones;
use App\Models\EvaluacionDiario;
use App\Models\EvaluacionTrabajo;

class EvaluacionController extends Controller
{
    public function store(Request $request)
    {
        // Nueva calificacion
        $calificacion = new Calificaciones();
        $calificacion->fecha = date('Y-m-d');
        $calificacion->id_ficha = $request->input('id_ficha');
        $calificacion->save();

        // Nueva evaluacion
        $evaluacion = new Evaluacion();
        $evaluacion->indicador = 'Esfuerzo y regularidad';
        $evaluacion->valoracion = $request->input('nota1');
        if (is_null($request->input('observaciones1'))) {
            $evaluacion->observacion = 'Sin observaciones';
        } else {
            $evaluacion->observacion = $request->input('observaciones1');
        }
        $evaluacion->save();

        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion2 = new Evaluacion();
        $evaluacion2->indicador = 'Orden, estructura y presentacion';
        $evaluacion2->valoracion = $request->input('nota2');
        if (is_null($request->input('observaciones2'))) {
            $evaluacion2->observacion = 'Sin observaciones';
        } else {
            $evaluacion2->observacion = $request->input('observaciones2');
        }
        $evaluacion2->save();

        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion3 = new Evaluacion();
        $evaluacion3->indicador = 'Contenido';
        $evaluacion3->valoracion = $request->input('nota3');
        if (is_null($request->input('observaciones3'))) {
            $evaluacion3->observacion = 'Sin observaciones';
        } else {
            $evaluacion3->observacion = $request->input('observaciones3');
        }
        $evaluacion3->save();

        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion4 = new Evaluacion();
        $evaluacion4->indicador = 'Terminologia y notacion';
        $evaluacion4->valoracion = $request->input('nota4');
        if (is_null($request->input('observaciones4'))) {
            $evaluacion4->observacion = 'Sin observaciones';
        } else {
            $evaluacion4->observacion = $request->input('observaciones4');
        }
        $evaluacion4->save();

        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion5 = new Evaluacion();
        $evaluacion5->indicador = 'Calidad del trabajo';
        $evaluacion5->valoracion = $request->input('nota5');
        if (is_null($request->input('observaciones5'))) {
            $evaluacion5->observacion = 'Sin observaciones';
        } else {
            $evaluacion5->observacion = $request->input('observaciones5');
        }
        $evaluacion5->save();

        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion6 = new Evaluacion();
        $evaluacion6->indicador = 'Relaciona conceptos';
        $evaluacion6->valoracion = $request->input('nota6');
        if (is_null($request->input('observaciones6'))) {
            $evaluacion6->observacion = 'Sin observaciones';
            $evaluacion6->save();

        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion7 = new Evaluacion();
        $evaluacion7->indicador = 'Reflexion sobre aprendizaje';
        $evaluacion7->valoracion = $request->input('nota7');
        if (is_null($request->input('observaciones7'))) {
            $evaluacion7->observacion = 'Sin observaciones';
        } else {
            $evaluacion7->observacion = $request->input('observaciones7');
        }
        $evaluacion7->save();
        
        // Creamos una evaluacion diario x cada evaluacion
        $evaluacionDiario = new EvaluacionDiario();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        return redirect()->route('principal');
        }
    }

    public function storeTrabajoEmpresa(Request $request)
    {
        // Nueva calificacion
        $calificacion = new Calificaciones();
        $calificacion->fecha = date('Y-m-d');
        $calificacion->id_ficha = $request->input('id_ficha');
        $calificacion->save();

        // Nueva evaluacion
        $evaluacion = new Evaluacion();
        $evaluacion->indicador = 'Actitud y disposicion para el trabajo';
        $evaluacion->valoracion = $request->input('nota1');
        if (is_null($request->input('observaciones1'))) {
            $evaluacion->observacion = 'Sin observaciones';
        } else {
            $evaluacion->observacion = $request->input('observaciones1');
        }
        $evaluacion->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion2 = new Evaluacion();
        $evaluacion2->indicador = 'Puntualidad';
        $evaluacion2->valoracion = $request->input('nota2');
        if (is_null($request->input('observaciones2'))) {
            $evaluacion2->observacion = 'Sin observaciones';
        } else {
            $evaluacion2->observacion = $request->input('observaciones2');
        }
        $evaluacion2->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion3 = new Evaluacion();
        $evaluacion3->indicador = 'Responsabilidad';
        $evaluacion3->valoracion = $request->input('nota3');
        if (is_null($request->input('observaciones3'))) {
            $evaluacion3->observacion = 'Sin observaciones';
        } else {
            $evaluacion3->observacion = $request->input('observaciones3');
        }
        $evaluacion3->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion4 = new Evaluacion();
        $evaluacion4->indicador = 'Capacidad de resolucion de problemas';
        $evaluacion4->valoracion = $request->input('nota4');
        if (is_null($request->input('observaciones4'))) {
            $evaluacion4->observacion = 'Sin observaciones';
        } else {
            $evaluacion4->observacion = $request->input('observaciones4');
        }
        $evaluacion4->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion5 = new Evaluacion();
        $evaluacion5->indicador = 'Calidad en el trabajo';
        $evaluacion5->valoracion = $request->input('nota5');
        if (is_null($request->input('observaciones5'))) {
            $evaluacion5->observacion = 'Sin observaciones';
        } else {
            $evaluacion5->observacion = $request->input('observaciones5');
        }
        $evaluacion5->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion6 = new Evaluacion();
        $evaluacion6->indicador = 'Implicación e integracion en el equipo';
        $evaluacion6->valoracion = $request->input('nota6');
        if (is_null($request->input('observaciones6'))) {
            $evaluacion6->observacion = 'Sin observaciones';
            $evaluacion6->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion7 = new Evaluacion();
        $evaluacion7->indicador = 'Toma de decisiones';
        $evaluacion7->valoracion = $request->input('nota7');
        if (is_null($request->input('observaciones7'))) {
            $evaluacion7->observacion = 'Sin observaciones';
        } else {
            $evaluacion7->observacion = $request->input('observaciones7');
        }
        $evaluacion7->save();
        
        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion8 = new Evaluacion();
        $evaluacion8->indicador = 'Capacidad de comunicacion oral y escrita';
        $evaluacion8->valoracion = $request->input('nota8');
        if (is_null($request->input('observaciones8'))) {
            $evaluacion8->observacion = 'Sin observaciones';
        } else {
            $evaluacion8->observacion = $request->input('observaciones8');
        }
        $evaluacion8->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion9 = new Evaluacion();
        $evaluacion9->indicador = 'Capacidad de planificacion y organizacion';
        $evaluacion9->valoracion = $request->input('nota9');
        if (is_null($request->input('observaciones9'))) {
            $evaluacion9->observacion = 'Sin observaciones';
        } else {
            $evaluacion9->observacion = $request->input('observaciones9');
        }
        $evaluacion9->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();

        // Nueva evaluacion
        $evaluacion10 = new Evaluacion();
        $evaluacion10->indicador = 'Capacidad de aprendizaje y asimilacion';
        $evaluacion10->valoracion = $request->input('nota10');
        if (is_null($request->input('observaciones10'))) {
            $evaluacion10->observacion = 'Sin observaciones';
        } else {
            $evaluacion10->observacion = $request->input('observaciones10');
        }
        $evaluacion10->save();

        // Creamos una evaluacion trabajo x cada evaluacion
        $evaluacionDiario = new EvaluacionTrabajo();
        $evaluacionDiario->id_evaluacion = Evaluacion::all()->last()->id;
        $evaluacionDiario->id_calificacion = Calificaciones::all()->last()->id;
        $evaluacionDiario->save();


        return redirect()->route('principal');
        }
    }
}
