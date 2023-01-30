<?php

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

Route::get('{any}', function () {
    return view('app');
})->where('any','.*');

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

Route::get('home', function()
{
    return View::make('pages.home');
})->name('principal');

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