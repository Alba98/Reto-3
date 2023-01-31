<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\RegistrosController;


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

//mio
Route::get('/nav', function () {
    return view('layouts.default');
});
//

Route::get('/app', function () {
    return view('layouts.app');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function()
{
    return View::make('welcome');
});

Route::get('home', [UserController::class, 'home'])->name('principal');
Route::get('notificaciones', [UserController::class, 'notificaciones'])->name('notificaciones');

Route::get('registros', [RegistrosController::class, 'index'])->name('registros');
    Route::get('registros/alumno', [RegistrosController::class, 'alumno'])->name('registrosAlumno');
    Route::get('registros/empresa', [RegistrosController::class, 'empresa'])->name('registrosEmpresa');
    Route::get('registros/tutorEmpresa', [RegistrosController::class, 'tutorEmpresa'])->name('registrosTutorEmpresa');
    Route::get('registros/tutorUniversidad', [RegistrosController::class, 'tutorUniversidad'])->name('registrosTutorUniversidad');
    Route::get('registros/coordinador', [RegistrosController::class, 'coordinador'])->name('registrosCoordinador');

//coordinador
Route::get('registrar', [RegistrarController::class, 'index'])->name('darAlta');
    Route::get('registrar/grado', [RegistrarController::class, 'grado'])->name('registrarGrado');
    Route::get('registrar/alumno', [RegistrarController::class, 'alumno'])->name('registrarAlumno');
    Route::get('registrar/empresa', [RegistrarController::class, 'empresa'])->name('registrarEmpresa');
    Route::get('registrar/tutorEmpresa', [RegistrarController::class, 'tutorEmpresa'])->name('registrarTutorEmpresa');
    Route::get('registrar/tutorUniversidad', [RegistrarController::class, 'tutorUniversidad'])->name('registrarTutorUniversidad');
    Route::get('registrar/coordinador', [RegistrarController::class, 'coordinador'])->name('registrarCoordinador');

Route::get('asignarDual', [UserController::class, 'asignarDual'])->name('asignarDual'); //registrar ?
Route::get('estadisticas', [UserController::class, 'estadisticas'])->name('estadisticas');

//alumno
Route::get('diarioAprendizaje', [UserController::class, 'diario'])->name('diarioAprendizaje');
Route::get('notas', [UserController::class, 'notas'])->name('notas');

//tutor universidad
Route::get('fichaSeguimiento', [UserController::class, 'fichaSeg'])->name('fichaSeg');
Route::get('evaluar', [UserController::class, 'evaluar'])->name('evaluar');
Route::get('alumnos', [UserController::class, 'alumnos'])->name('alumnos');