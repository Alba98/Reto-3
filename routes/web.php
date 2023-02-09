<?php
use Illuminate\Support\Facades\Route;
// Importamos los controladores que vamos a utilizar
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\FichaDualController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\TempresaController;
use App\Http\Controllers\TuniversidadController;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\FichaSeguimientoController;
use App\Http\Controllers\EvaluacionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

// Rutas de la página principal
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [UserController::class, 'home'])->name('principal');
Route::get('notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones');
Route::delete('notificaciones/{notificacion}', [NotificacionesController::class, 'destroy'])->name('notificaciones.destroy');
Route::get('perfil', [UserController::class, 'perfil'])->name('perfil');

// Rutas de los registros
Route::get('registros', [RegistrosController::class, 'index'])->name('registros');
Route::get('registros/alumno', [AlumnoController::class, 'index'])->name('registrosAlumno');
Route::get('registros/empresa', [EmpresaController::class, 'index'])->name('registrosEmpresa');
Route::get('registros/tutorEmpresa', [RegistrosController::class, 'tutorEmpresa'])->name('registrosTutorEmpresa');
Route::get('registros/tutorUniversidad', [TuniversidadController::class, 'index'])->name('registrosTutorUniversidad');
Route::get('registros/{id}/alumnos', [TuniversidadController::class, 'show'])->name('tuniversidad.show');
Route::get('registros/empresa/{id}', [TempresaController::class, 'show'])->name('tempresa.show');
Route::get('registros/empresa/{id}/alumnos', [TempresaController::class, 'showAlumnos'])->name('tempresa.showAlumnos');
Route::get('registros/coordinador', [CoordinadorController::class, 'index'])->name('registrosCoordinador');
Route::get('registros/alumnos', [AlumnoController::class, 'alumnosTutorHistorial'])->name('alumnos.tutorHistorial');

// Página principal para dar de alta
Route::get('registrar', [RegistrarController::class, 'index'])->name('darAlta');

//Rutas de formularios 'create' cada una de las entidades
Route::get('registrar/grado', [RegistrarController::class, 'grado'])->name('registrarGrado');
Route::get('registrar/alumno', [RegistrarController::class, 'alumno'])->name('registrarAlumno');
Route::get('registrar/empresa', [RegistrarController::class, 'empresa'])->name('registrarEmpresa');
Route::get('registrar/tutorEmpresa', [RegistrarController::class, 'tutorEmpresa'])->name('registrarTutorEmpresa');
Route::get('registrar/tutorUniversidad', [RegistrarController::class, 'tutorUniversidad'])->name('registrarTutorUniversidad');
Route::get('registrar/coordinador', [RegistrarController::class, 'coordinador'])->name('registrarCoordinador');
Route::get('asignarDual', [UserController::class, 'asignarDual'])->name('asignarDual');

// Rutas de 'store' cada una de las entidades
Route::post('registrar/grado', [GradoController::class, 'store'])->name('grado.store');
Route::post('registrar/alumno', [AlumnoController::class, 'store'])->name('alumno.store');
Route::post('registrar/empresa', [EmpresaController::class, 'store'])->name('empresa.store');
Route::post('registrar/tutorEmpresa', [TempresaController::class, 'store'])->name('tempresa.store');
Route::post('registrar/tutorUniversidad', [TuniversidadController::class, 'store'])->name('tuniversidad.store');
Route::post('registrar/coordinador', [CoordinadorController::class, 'store'])->name('coordinador.store');
Route::post('evaluacion/diario/{alumno}', [EvaluacionController::class, 'store'])->name('evaluacion.store');
Route::post('fichaSeguimiento/{alumno}', [EvaluacionController::class, 'storeTrabajoEmpresa'])->name('trabajo.store');
Route::post('asignarDual', [FichaDualController::class, 'store'])->name('dual.store');

// Ruta hacia las estadisticas
Route::get('estadisticas', [UserController::class, 'estadisticas'])->name('estadisticas');

// Actividades del alumno
Route::get('diarioAprendizaje', [DiarioController::class, 'index'])->name('diarioAprendizaje');
Route::get('diarioAprendizaje/nuevo', [DiarioController::class, 'add'])->name('nuevaEntradaDiario');
Route::post('diarioAprendizaje/nuevo', [DiarioController::class, 'store'])->name('diario.store');
Route::get('diarioAlumno/{id}', [DiarioController::class, 'show'])->name('diarioAlumno'); //tutor
Route::get('notas', [NotasController::class, 'index'])->name('notas');

//Actividades del tutor
Route::get('evaluar/{alumno}', [UserController::class, 'evaluar'])->name('evaluar');
Route::get('alumnos', [AlumnoController::class, 'alumnosTutor'])->name('alumnos');
Route::get('fichaAlumno/{alumno}', [AlumnoController::class, 'verAlumno'])->name('fichaAlumno');
//Route::get('fichaSeguimiento', [UserController::class, 'fichaSeguimiento'])->name('fichaSeguimiento');
Route::get('evaluacion/diario/{alumno}', [UserController::class, 'evaluacionDiario'])->name('evaluacionDiario');
Route::get('evaluacion/ficha/{alumno}', [UserController::class, 'evaluacionFicha'])->name('evaluacionFicha');

//Ver un alumno desde el tutor:
Route::get('/alumno/{id}',[AlumnoController::class,'show'])->name('alumno.show');

// Eliminación de registros (solo pueden ser eliminados por el coordinador)
Route::delete('registros/tutorUniversidad/{tutorUniversidad}', [TuniversidadController::class, 'destroy'])->name('tuniversidad.destroy');
Route::delete('registros/tutorEmpresa/{tutorEmpresa}', [TempresaController::class, 'destroy'])->name('tEmpresa.destroy');
Route::delete('registros/alumno/{alumno}', [AlumnoController::class, 'destroy'])->name('alumno.destroy');
Route::delete('registros/empresa/{empresa}', [EmpresaController::class, 'destroy'])->name('empresa.destroy');
Route::delete('registros/coordinador/{coordinador}', [CoordinadorController::class, 'destroy'])->name('coordinador.destroy');

// Rutas fichas de seguimiento
Route::get('fichaSeguimiento', [FichaSeguimientoController::class, 'index'])->name('ficha.index');
Route::get('fichaSeguimiento/{id}', [FichaSeguimientoController::class, 'show'])->name('fichaSeguimiento');
Route::post('ficha_Seguimiento', [FichaSeguimientoController::class, 'store'])->name('ficha.store');

// Actividades del tutor de empresa
Route::get('/tutor/ver-alumnos',  [TempresaController::class, 'verAlumnos'])->name('tempresa.verAlumnos');


Route::get('\notificaciones', function(){
    
    Notification::route('mail', 'daw.wat2022@gmail.com')->notify(new testNotification());
    return view('notificaciones');
});
 
