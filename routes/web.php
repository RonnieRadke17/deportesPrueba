<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\rolController;
use App\Http\Controllers\categoriasController;
use App\Http\Controllers\periodosController;
use App\Http\Controllers\gruposController;
use App\Http\Controllers\profesoresController;
use App\Http\Controllers\cargaController;
use App\Http\Controllers\asistenciaController;
use App\Http\Controllers\eventoController;

//cuando todo ya este funcional se borran y se sustituyen por el resourse

Route::get('/administrador',[AdminController::class,'index']);
Route::get('/administrador/profile',[AdminController::class,'profile']);

//Route::resource('/extracurriculares',ExtracurricularController::class)
Route::get('/extracurriculares',[ExtracurricularController::class,'index']);
Route::get('/extracurriculares/registrar',[ExtracurricularController::class,'create']);
Route::get('/extracurriculares/actualizar',[ExtracurricularController::class,'update']);

Route::get('/roles/edit',[rolController::class,'actualizar']);
Route::resource('/roles',rolController::class);

Route::get('/evento/edit',[eventoController::class,'actualizar']);
Route::resource('/evento',eventoController::class);


Route::get('/asistencia/actualizar',[asistenciaController::class,'actualizar']);
Route::resource('/asistencia',asistenciaController::class);


Route::get('/carga/actualizar',[cargaController::class,'actualizar']);
Route::resource('/carga',cargaController::class);

Route::get('/profesores/actualizar',[profesoresController::class,'actualizar']);
Route::resource('/profesores',profesoresController::class);


Route::get('/categorias',[categoriasController::class,'index']);
Route::get('/categorias/actualizar',[categoriasController::class,'actualizar']);
Route::get('/categorias/registrar',[categoriasController::class,'create']);

Route::get('/periodos',[periodosController::class,'index']);
Route::get('/periodos/edit',[periodosController::class,'actualizar']);
Route::get('/periodos/create',[periodosController::class,'create']);

Route::get('/grupos',[gruposController::class,'index']);
Route::get('/grupos/edit',[gruposController::class,'actualizar']);
Route::get('/grupos/create',[gruposController::class,'create']);


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
