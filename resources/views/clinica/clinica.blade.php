@extends('layouts.plantilla')
@section('title', 'Clinicas Médicas')
@section('meta-description', 'Clinicas Médicas meta description')
@section('content')
    <h1>Clinicas Médicas</h1>

    {{---<h2><a href="/clinicas/1">{{ 'content' }}</a></h2>
         <h2><a href="/clinicas/2">{{ 'content' }}</a></h2>--}}

     <!--Imagen con texto-->
       <div class="container">
            <div class="fondo card text-bg-light">
                <img src="img/fondo1.jpg" class="card-img" alt="..." style="height:430px">
                <div class="card-img-overlay">
                <h5 class="card-title">Clinicas Medicas</h5>
                <p class="card-text"> Haz click a tu salud!</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, omnis.</p>
                </div>
            </div>
       </div>
        <br>
        {{--columnas de imagenes con txto--}}
       <div class="container">
            <div class="columna container-text-center">
                <div class="row justify-content-md-center">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">Clinica1</h5>
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Clinica</a>
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">Clinica2</h5>
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Card link</a>
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">Clinica3</h5>
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Card link</a>
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div> <br>
                {{--segunda parte de contenido con img--}}
                <div class="row justify-content-md-center">
                    <div class="col col-sm-3 col-lg-4 col-xl-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">Clinica4</h5>
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Card link</a>
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">Clinica5</h5>
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Card link</a>
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">Clinica6</h5>
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Card link</a>
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
@endsection
