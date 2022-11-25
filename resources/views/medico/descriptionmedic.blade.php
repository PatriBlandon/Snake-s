@extends('layouts.plantilla')
@section('title', 'Descripción de clinicas Médicas')
@section('meta-description', 'Clinicas Médicas meta description')
@section('content')
    {{---<h2><a href="/clinicas/1">{{ 'content' }}</a></h2>
         <h2><a href="/clinicas/2">{{ 'content' }}</a></h2>--}}

     <!--Imagen con texto-->
    <div class="container">
        <div class="card text-bg-light">
            <img src="img/2.jpg" class="card-img" alt="doctoratabler" height=430px>
            <div class="card-img-overlay">
              <h1 class="card-title" class="Display-1">Perfil Medicos</h1>
            </div>
        </div><br>
    </div>
    <br>


                {{--contenedor columna texto--}}
    <div class="container-fluid" class="w-50 mx-auto text-center" id="intro">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="/img/Doc1.jpg" alt="doctor1"
                width="300" height="270">
            </div>
            <div class="col">
                <h2>Doctor Rodríguez</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, minus.</p>
            </div>
        </div><br>
        {{--parte columa valoraciones--}}
    </div>
    <br>
     {{--Contenedor de img de fondo y columnas desplegables hacia abajo--}}
            {{--carrusel información--}}
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/comentado1.jpg" class="d-block w-100" alt="comentador1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ronmel Moreno</h5>
                      <p>"Esta es una grandiosa aplicación, me ha permitido poder reservar mi cita médica desde la comodidad de mi hogar"</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/img/comentado2.jpg" class="d-block w-100" alt="comentador2">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Isabel Álvarez</h5>
                      <p>"Me encanto, está aplicación es muy facil de usar y me sirve para cualquier situacion de emergencia o una cita pronto, esta muy bien."</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/img/comentado3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Louis Mendoza</h5>
                      <p>"Buena app en la web, me ayuda cuando quiero reservar y mi abuelito se encuentra mal y me toca llevarlo."</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>
@endsection
