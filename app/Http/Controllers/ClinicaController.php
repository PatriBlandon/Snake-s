<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function bienvenido(){
        return view('clinica.clinica');
    }
    public function sesion(){
        return view('clinica.descriptionclinic');
    }
}
