<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

/*
aqui es donde se almacenan las rutas al ser llamadas por una accion
*/


Route::get('/index', [EmpleadosController::class, 'index'])->name('empleados.index');
Route::get('/', [EmpleadosController::class, 'menu'])->name('empleados.menu');
Route::get('/horas', [EmpleadosController::class, 'horas'])->name('empleados.horas');
Route::put('/horasadd/{id}', [EmpleadosController::class, 'horasadd'])->name('empleados.horasadd'); //añade hora entrada
Route::put('/horasSalida/{id}', [EmpleadosController::class, 'horasSalida'])->name('empleados.horasSalida'); //hora slaida
Route::get('/create', [EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/store', [EmpleadosController::class, 'store'])->name('empleados.store');
Route::get('/edit/{id}', [EmpleadosController::class, 'edit'])->name('empleados.edit');
Route::get('/edithora/{id}', [EmpleadosController::class, 'edithora'])->name('empleados.edithora');
Route::get('/show/{id}', [EmpleadosController::class, 'show'])->name('empleados.show');
Route::put('/update/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');
Route::put('/updatehora/{id}', [EmpleadosController::class, 'updatehora'])->name('empleados.updatehora');
Route::DELETE('/destroy/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');

