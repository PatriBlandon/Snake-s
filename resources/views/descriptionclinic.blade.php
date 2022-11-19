@extends('layouts.plantilla')
@section('title', 'Descripción de clinicas Médicas')
@section('meta-description', 'Clinicas Médicas meta description')
@section('content')
    <h1>Descripción de clinicas</h1>

    {{---<h2><a href="/clinicas/1">{{ 'content' }}</a></h2>
         <h2><a href="/clinicas/2">{{ 'content' }}</a></h2>--}}
    <!--Imagen con texto-->
    <div class="container">
        <div class="fondo card text-bg-light">
            <img src="img/fondo1.jpg" class="card-img" alt="..." style="height:430px">
            <div class="card-img-overlay">
            <h5 class="card-title">Clinicas</h5>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
            <div class="row">
                    {{--contenedor columna texto--}}
                <div class="row">
                    <div class="col">
                        <img src="./img/fondo1.jpg" alt="imagen clinica" width="300px">
                    </div>
                    <div class="col">
                        <h2>Clinica Medica</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, minus.</p>
                    </div>
                </div><br>
            {{--parte columa valoraciones--}}
                <div class="row">
                    <div class="col">
                        <h2>Servicios</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ea reiciendis nobis.</p>
                    </div>
                </div> <br>
            </div> <br>
    </div>

    {{--Contenedor de img de fondo y columnas desplegables hacia abajo--}}
    <div class="container">
        <div class="card text-bg-light">
            <img src="./img/fondo1.jpg" class="card-img" alt="fondofotoopacidad" style="height:430px">
            {{--conjunto de tarjetas dentro de fondo--}}
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">"Servicio1"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">"servicio2"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">"servicio3"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>                </div>
                </div>
                </div>
            {{--segunda seccion--}}
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">"servicio4"</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">"servicio5"</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">"servicio6"</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    {{--contenedor valoraciones--}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Servicios</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ea reiciendis nobis.</p>
            </div>
        </div>
    </div>
    {{--carrusel información--}}
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="card-body">
                    <h5 class="card-title">"Comentario1"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6 style="text-small">+675334545454</h6>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="card-body">
                    <h5 class="card-title">"Comentario2"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6 style="text-small">+675334545454</h6>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"Comentario3"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6 style="text-small">+675334545454</h6>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"Comentario4"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6 style="text-small">+675334545454</h6>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"Comentario5"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6 style="text-small">+675334545454</h6>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"Coementario6"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6 style="text-small">+675334545454</h6>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
@endsection
