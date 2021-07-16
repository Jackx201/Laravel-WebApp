<?php

use Illuminate\Support\Facades\Route;
//Calling our controller
use App\Http\Controllers\controllerGrades;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

-- VIEWS MANAGEMENT --

Route::get('/', function () {
    return view('index');
});

Route::get('/5-appweb', function() {
    //Define variables.
    $nom = "Arquímidez";
    $mats = array("Diseño Web", "Base de datos", "OOP");
    $grade = 8;
    $num = 1;
    //Give parameters.
    return view('hola')
    ->with('nom', $nom)
    ->with('mats', $mats)
    ->with('grade', $grade)
    ->with('num', $num);
});

Route::get('/log', function() {
    return view('login');
});

VIEWS MANAGEMENT USING CONTROLLERS */ 
//Nombre que aparecerá en el url - Nombre de la función - Nombre propio
Route::get('/', [controllerGrades::class, 'index']) ->name('index');
Route::get('/5-appweb', [controllerGrades::class, 'app5th']) -> name('grades');
Route::get('/log', [controllerGrades::class, 'login']) -> name('log') -> middleware('guest');
Route::post('/valida', [controllerGrades::class, 'validacion']);
//Route::get('/registro', [controllerGrades::class, 'registro']) -> name('registro');
Route::post('/guardar', [controllerGrades::class, 'guardar']) -> name('guardar');
Route::get('/menulog', [controllerGrades::class, 'menulog']) -> name('menulog') -> middleware('auth');
Route::get('/logout', [controllerGrades::class, 'logout']) -> name('logout');
Route::get('/materias', [controllerGrades::class, 'materias']) -> name('materias');

Route::resource('/admin', adminController::class);