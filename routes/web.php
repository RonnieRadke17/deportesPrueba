<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExtracurricularController;

Route::get('/administrador',[AdminController::class,'index']);
Route::get('/administrador/profile',[AdminController::class,'profile']);

Route::get('/extracurriculares',[ExtracurricularController::class,'index']);
Route::get('/extracurriculares/registrar',[ExtracurricularController::class,'create']);


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
