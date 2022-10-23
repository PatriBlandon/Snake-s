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
        <div class="card text-bg-light">
            <img src="./img/fondo1.jpg" class="card-img" alt="fondofotoopacidad" style="height:430px">
            {{--conjunto de tarjetas dentro de fondo--}}
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <a href="{{ route('perfildoctor') }}"><img src="..." class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <a href="{{ route('perfildoctor') }}"><h5 class="card-title">"Medico1"</h5></a>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><hr>
                      <h6 class="card-text-small">+675334545454</h6>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">"Comentario"</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><hr>
                      <h6 class="card-text-small">+675334545454</h6>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">"Medico3"</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                      <h6 class="card-text-small">+675334545454</h6>
                    </div>
                  </div>
                </div>
            {{--segunda seccion--}}
                <div class="col">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">"Medico4"</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><hr>
                        <h6 class="card-text-small">+675334545454</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">"Medico5"</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><hr>
                        <h6 class="card-text-small">+675334545454</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">"Medico6"</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p><hr>
                        <h6 style="text-small">+675334545454</h6>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
@endsection
