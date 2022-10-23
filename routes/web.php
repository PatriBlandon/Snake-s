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


Route::view('/', 'welcome')->name('welcome');
//rutas clinicas
Route::view('/clinicas', 'clinica')->name('clinica');
Route::view('/descripcionclinica', 'descriptionclinic')->name('descriptionclinic');
//rutas medicos
Route::view('medicos', 'medicos')->name('medicos');
Route::view('/perfildoctor', 'perfildoctor')->name('perfildoctor');
//ruta descripcion medica
Route::view('/descriptionmedic', 'descriptionmedic')->name('descriptionmedic');
//ruta contacto
Route::view('/contacto', 'contact')->name('contact');
//ruta acerca de
Route::view('/acercade', 'about')->name('about');


