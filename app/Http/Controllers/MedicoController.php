<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function hola(){
        return view('medico.medicos');
    }
    public function sesion(){
        return view('medico.descriptionmedic');
    }
    public function cola(){
        return view('medico.perfildoctor');
    }
}
