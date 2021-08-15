<?php

use Illuminate\Support\Facades\Route;
//Calling our controller
use App\Http\Controllers\controllerGrades;
use App\Http\Controllers\adminController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\usersController;

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
Route::resource('/teacher', teacherController::class) -> only('index', 'edit', 'update', 'create', 'store');
Route::resource('/users', usersController::class)->middleware('can:admin.assign.permission');