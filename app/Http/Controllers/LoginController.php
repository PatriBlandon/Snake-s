<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function bienvenido(){
        return view('bienvenido.bienvenido');
    }
    public function sesion(){
        return view('bienvenido.sesion');
    }
    public function registro(){
        return view('bienvenido.registro');
    }
}
