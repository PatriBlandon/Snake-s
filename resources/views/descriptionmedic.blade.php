@extends('layouts.plantilla')
@section('title', 'Descripción de clinicas Médicas')
@section('meta-description', 'Clinicas Médicas meta description')
@section('content')
    <h1>Perfil médico</h1>

    {{---<h2><a href="/clinicas/1">{{ 'content' }}</a></h2>
         <h2><a href="/clinicas/2">{{ 'content' }}</a></h2>--}}

     <!--Imagen con texto-->
        <div class="fondo card text-bg-light">
            <img src="img/fondo1.jpg" class="card-img" alt="..." style="height:430px">
            <div class="card-img-overlay">
              <h5 class="card-title">Perfil Medicos</h5>
            </div>
        </div><br>

        <div class="row">
                {{--contenedor columna texto--}}
            <div class="row">
                <div class="col">
                    <img src="img/leonardo.jpg" alt="">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, minus.</p>
                </div>
            </div><br>
            {{--parte columa valoraciones--}}
            <div class="row">
                <div class="col">
                    <h2>Valoraciones</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ea reiciendis nobis.</p>
                </div>
            </div> <br>
        </div> <br>

        {{--Contenedor de img de fondo y columnas desplegables hacia abajo--}}
        {{--carrusel información--}}
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
                    <h5 class="card-title">"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6>usuario</h6>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="card-body">
                    <h5 class="card-title">"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6>usuario</h6>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6>usuario</h6>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6>usuario</h6>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6>usuario</h6>
                </div>
            <div class="carousel-item">
                <div class="card-body">
                    <h5 class="card-title">"</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                    <h6>usuario</h6>
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
        </div>
@endsection
