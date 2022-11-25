@extends('layouts.plantilla')

@section('title', 'Medicos')

@section('meta-description', 'Medicos meta description')

@section('content')

     <div class="card text-bg-light">
            <img src="/img/3.jpg" class="card-img" alt="perfildoctor">
            <div class="card-img-overlay">
              <h1 class="card-title">Médicos</h1>
              <p class="card-text"> Haz click a tu salud!</p>
            </div>
        </div><br>
        <!--Contenedor de imagen con link redirección-->
    <div class="columna container-text-center">
        <div class="row justify-content-md-center">
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="/img/Doc1.jpg" class="card-img-top" alt="doctor1"></a>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic')}}" class="card-link">Dr. Daniel Mendoza</a>
                    <div class="card-body">
                      <p class="card-text">Médico Especialista en Ordodoncia, Endodoncia.</p>
                    </div>
                  </div>
            </div>
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="/img/Doc2.jpg" class="card-img-top" alt="doctor2"></a>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Dr. Jackson Ordoñez</a>
                    <div class="card-body">
                      <p class="card-text">Médico Especialista en Problemas del pie.</p>
                    </div>
                  </div>
            </div>
            <div class="col-1 col-sm-2 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/Doc3.jpg" class="card-img-top" alt="doctor3"></a>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Dr. Laura Flores</a>
                    <div class="card-body">
                      <p class="card-text">Médico Especialista en Cardiologia</p>
                    </div>
                  </div>
            </div>
        </div> <br>
        <div class="row justify-content-md-center">
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/Doc4.jpg" class="card-img-top" alt="doctor4"></a>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Dr. Jorge Castillo</a>
                    <div class="card-body">
                      <p class="card-text">Médico Especialista en Cardiologia</p>
                    </div>
                  </div>
            </div>
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/Doc5.jpg" class="card-img-top" alt="doctor5"></a>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Dr. Karla Jarquín</a>
                    <div class="card-body">
                      <p class="card-text">Médico Especialista en Ginecologia</p>
                    </div>
                  </div>
            </div>
            <div class="col-1 col-sm-2 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/Doc6.jpg" class="card-img-top" alt="doctor6"></a>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Dr. Victor Blandón</a>
                    <div class="card-body">
                      <p class="card-text">Médico General</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <br>

@endsection
