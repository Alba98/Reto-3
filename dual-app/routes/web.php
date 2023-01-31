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

Route::get('home/', [UserController::class, 'home'])->name('principal');

//coordinador
Route::get('darAlta', function()
{
    return View::make('pages.darAlta');
})->name('darAlta');

Route::get('asignarDual', function()
{
    return View::make('pages.asignarDual');
})->name('asignarDual');

Route::get('registros', function()
{
    return View::make('pages.registros');
})->name('registros');

Route::get('notificaciones', function()
{
    return View::make('pages.notificaciones');
})->name('notificaciones');

//alumno
Route::get('diarioAprendizaje', function()
{
    return View::make('pages.darAlta');
})->name('diario_a');

Route::get('notas', function()
{
    return View::make('pages.alumno.notas');
})->name('notas_a');

Route::get('registros', function()
{
    return View::make('pages.registros');
})->name('registros_a');

Route::get('notificaciones', function()
{
    return View::make('pages.notificaciones');
})->name('notificaciones_a');