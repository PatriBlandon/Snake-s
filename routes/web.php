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
Route::view('medicos', 'medicos')->name('medicos');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/acercade', 'about')->name('about');

