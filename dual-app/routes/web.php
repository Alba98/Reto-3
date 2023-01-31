<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('registros', [UserController::class, 'registros'])->name('registros');

//coordinador
Route::get('registrar', [UserController::class, 'darAlta'])->name('darAlta');
Route::get('asignarDual', [UserController::class, 'asignarDual'])->name('asignarDual'); //registrar ?
Route::get('estadisticas', [UserController::class, 'estadisticas'])->name('estadisticas');

//alumno
Route::get('diarioAprendizaje', [UserController::class, 'diario'])->name('diarioAprendizaje');
Route::get('notas', [UserController::class, 'notas'])->name('notas');

//tutor universidad
Route::get('fichaSeguimiento', [UserController::class, 'fichaSeg'])->name('fichaSeg');
Route::get('evaluar', [UserController::class, 'evaluar'])->name('evaluar');
Route::get('alumnos', [UserController::class, 'alumnos'])->name('alumnos');