<?php

use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
//rutas clinicas
Route::get('/clinica', [ClinicaController::class, 'bienvenido'])->name('clinica.clinica');
Route::get('/clinica/descripcionclinica', [ClinicaController::class, 'sesion'])->name('clinica.descriptionclinic');;
//rutas medicos
Route::get('/medicos', [MedicoController::class, 'hola'])->name('medico.medico');
//Route::get('/medicos/perfildoctor/descriptionmedic', [MedicoController::class , 'sesion'])->name('descriptionmedic');
Route::get('/medicos/perfildoctor', [MedicoController::class, 'cola'])->name('medico.perfildoctor');
//ruta acerca de
Route::view('/acercade', 'about')->name('about');
//rutas de login
Route::get('Heathlink/bienvenido', [LoginController::class ,'bienvenido'])->name('bienvenido.bienvenido');
Route::get('registro/registro', [LoginController::class ,'registro'])->name('bienvenido.registro');
Route::get('sesion/sesion', [LoginController::class , 'sesion'])->name('bienvenido.sesion');


