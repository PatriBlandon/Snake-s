<?php

use Illuminate\Support\Facades\Route;

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


