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
            <img src="/img/3.jpg" class="card-img" alt="perfildoctor2" width=280px height=420px>
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
                        <img src="./img/CM.jpg" alt="imagen clinica" width="300px">
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

    </div>
@endsection
