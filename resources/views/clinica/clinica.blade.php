@extends('layouts.plantilla')
@section('title', 'Clinicas Médicas')
@section('meta-description', 'Clinicas Médicas meta description')
@section('content')
     <!--Imagen con texto-->
       <div class="container">
            <div class="card text-bg-light" id="tarjeta-clinica">
                <img src="img/2.jpg" class="card-img" alt="doctor_con_tablet" style="height:430px">
                <div class="card-img-overlay">
                <h1 class="card-title" class="display-1">Clinicas Medicas</h1>
                <p class="card-text" class="display-2"> Haz click a tu salud!</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-4">
                    <p>Estamos siempre para ayudarte.</p>
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
                            <img src="/img/C1.jpg" class="card-img-top" alt="clinica1">
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Clinica Santa Mónica</a>
                            <div class="card-body">
                            <p class="card-text">Ofrece servicios de Radiografias para el publico en general.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/C2.jpg" class="card-img-top" alt="clinica2">
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Clinica de Especialidades Estelí</a>
                            <div class="card-body">
                            <p class="card-text">Ofrece servicios de Oftalmologia, examenes de la vista, lentes, marcos de lentes, entre
                                otros articulos para el publico en general.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/C3.jpg" class="card-img-top" alt="clinica3">
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Clinica Sagrada Familia</a>
                            <div class="card-body">
                            <p class="card-text">Ofrece servicios de Consultas generales, para el público estiliano.</p>
                            </div>
                        </div>
                    </div>
                </div> <br>
                {{--segunda parte de contenido con img--}}
                <div class="row justify-content-md-center">
                    <div class="col col-sm-3 col-lg-4 col-xl-4">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/C4.jpg" class="card-img-top" alt="clinica4">
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Clinica Nazareth</a>
                            <div class="card-body">
                            <p class="card-text">Ofrece servicios de Consultas generales, para el público estiliano.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/C5.jpg" class="card-img-top" alt="Clinica5">
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Card link</a>
                            <div class="card-body">
                            <p class="card-text">Ofrece servicios de Consultas generales, servicio de ambulancia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/C6.jpg" class="card-img-top" alt="clinica6">
                            <a href="{{ url('/clinica/descripcionclinica') }}" class="card-link">Clinica del Diente</a>
                            <div class="card-body">
                            <p class="card-text">Ofreciendoles todo en la atención y tratamiento de problemas dentales,
                                coronas, endodoncia, y mucho más.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
@endsection
