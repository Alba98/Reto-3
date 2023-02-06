<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\TempresaController;
use App\Http\Controllers\TuniversidadController;
use App\Http\Controllers\CoordinadorController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [UserController::class, 'home'])->name('principal');
Route::get('notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones');
Route::delete('notificaciones/{notificacion}', [NotificacionesController::class, 'destroy'])->name('notificaciones.destroy');
Route::get('perfil', [UserController::class, 'perfil'])->name('perfil');

Route::get('registros', [RegistrosController::class, 'index'])->name('registros');
Route::get('registros/alumno', [AlumnoController::class, 'index'])->name('registrosAlumno');
Route::get('registros/empresa', [EmpresaController::class, 'index'])->name('registrosEmpresa');
Route::get('registros/tutorEmpresa', [RegistrosController::class, 'tutorEmpresa'])->name('registrosTutorEmpresa');
Route::get('registros/tutorUniversidad', [TuniversidadController::class, 'index'])->name('registrosTutorUniversidad');
Route::get('registros/coordinador', [CoordinadorController::class, 'index'])->name('registrosCoordinador');

//coordinador
Route::get('registrar', [RegistrarController::class, 'index'])->name('darAlta');
Route::get('registrar/grado', [RegistrarController::class, 'grado'])->name('registrarGrado');
Route::get('registrar/alumno', [RegistrarController::class, 'alumno'])->name('registrarAlumno');
Route::get('registrar/empresa', [RegistrarController::class, 'empresa'])->name('registrarEmpresa');
Route::get('registrar/tutorEmpresa', [RegistrarController::class, 'tutorEmpresa'])->name('registrarTutorEmpresa');
Route::get('registrar/tutorUniversidad', [RegistrarController::class, 'tutorUniversidad'])->name('registrarTutorUniversidad');
Route::get('registrar/coordinador', [RegistrarController::class, 'coordinador'])->name('registrarCoordinador');

Route::get('asignarDual', [UserController::class, 'asignarDual'])->name('asignarDual');
Route::post('asignarDual', [UserController::class, 'storeDual'])->name('dual.store');
Route::get('estadisticas', [UserController::class, 'estadisticas'])->name('estadisticas');

//alumno
Route::get('diarioAprendizaje', [DiarioController::class, 'index'])->name('diarioAprendizaje');
Route::get('diarioAprendizaje/nuevo', [DiarioController::class, 'add'])->name('nuevaEntradaDiario');
Route::get('diarioAlumno/{id}', [DiarioController::class, 'show'])->name('diarioAlumno'); //tutor
Route::get('notas', [NotasController::class, 'index'])->name('notas');

//tutor universidad
Route::get('evaluar', [UserController::class, 'evaluar'])->name('evaluar');
//Route::get('alumnos', [UserController::class, 'alumnos'])->name('alumnos');
Route::get('alumnos', [AlumnoController::class, 'alumnosTutor'])->name('alumnos');

Route::get('fichaAlumno', [AlumnoController::class, 'verAlumno'])->name('fichaAlumno');
Route::get('fichaSeguimineto', [UserController::class, 'fichaSeguimineto'])->name('fichaSeguimineto');
Route::get('evaluacion/diario', [UserController::class, 'evaluacionDiario'])->name('evaluacionDiario');
Route::get('evaluacion/ficha', [UserController::class, 'evaluacionFicha'])->name('evaluacionFicha');


// Crear un nuevo grado
Route::post('registrar/grado', [GradoController::class, 'store'])->name('grado.store');

// Crear un nuevo alumno
Route::post('registrar/alumno', [AlumnoController::class, 'store'])->name('alumno.store');

// Crear una nueva empresa
Route::post('registrar/empresa', [EmpresaController::class, 'store'])->name('empresa.store');

// Crear un nuevo tutor de empresa
Route::post('registrar/tutorEmpresa', [TempresaController::class, 'store'])->name('tempresa.store');

// Crear un nuevo tutor de universidad
Route::post('registrar/tutorUniversidad', [TuniversidadController::class, 'store'])->name('tuniversidad.store');

// Crear un nuevo coordinador
Route::post('registrar/coordinador', [CoordinadorController::class, 'store'])->name('coordinador.store');

//Ver un alumno desde el tutor:
Route::get('/alumno/{id}',[AlumnoController::class,'show'])->name('alumno.show')->whereNumber('id');

//
Route::get('chart', [ChartJSController::class, 'index']);

// Eliminar un tutor de universidad
Route::delete('registros/tutorUniversidad/{tutorUniversidad}', [TuniversidadController::class, 'destroy'])->name('tuniversidad.destroy');

// Eliminar un alumno
Route::delete('registros/alumno/{alumno}', [AlumnoController::class, 'destroy'])->name('alumno.destroy');

// Eliminar una empresa
Route::delete('registros/empresa/{empresa}', [EmpresaController::class, 'destroy'])->name('empresa.destroy');

// Eliminar coordinador
Route::delete('registros/coordinador/{coordinador}', [CoordinadorController::class, 'destroy'])->name('coordinador.destroy');