@extends('layouts.plantilla')
@section('title', 'Clinicas Médicas')
@section('meta-description', 'Clinicas Médicas meta description')
@section('content')
     <!--Imagen con texto-->
     <div class="container">
        <section class="card text-bg-light" id="tarjeta-bienvenido">
            <img src="img/2.jpg" class="card-img" alt="fondoclinica">
            <div class="card-img-overlay">
              <h1 class="card-title" class="display-1">Clinicas Médicas</h1> <hr>
            </div>
        </section>
    </div>
    <br>
            <p class="display-1">Clinicas</p>
        </div>
        <hr>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="/img/C1.jpg" class="card-img-top" alt="clinica">
                <div class="card-body">
                  <a href="{{ url('/clinica/descripcionclinica') }}"><h5 class="card-title">Clinica Santa Mónica</h5></a>
                  <p class=" ni ni-book-bookmark card-text">Ofrece servicios de Radiografias para el publico en general.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/img/C2.jpg" class="card-img-top" alt="clinica2">
                <div class="card-body">
                  <a href="{{ url('/clinica/descripcionclinica') }}"><h5 class="card-title">Clinica de Especialidades Estelí</h5></a>
                  <p class="card-text">Ofrece servicios de Oftalmologia, examenes de la vista, lentes, marcos de lentes, entre
                    otros articulos para el publico en general.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/img/C3.jpg" class="card-img-top" alt="clinica3">
                <div class="card-body">
                  <a href="{{ url('/clinica/descripcionclinica') }}"><h5 class="card-title">Clinica Sagrada Familia</h5></a>
                  <p class="card-text">Ofrece servicios de Consultas generales, para el público estiliano.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/img/C4.jpg" class="card-img-top" alt="clinica4">
                <div class="card-body">
                  <a href="{{ url('/clinica/descripcionclinica') }}"><h5 class="card-title">Clinica Nazareth</h5></a>
                  <p class="card-text">Ofrece servicios de Consultas generales, para el público estiliano.</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="/img/C5.jpg" class="card-img-top" alt="clinica5">
                  <div class="card-body">
                    <a href="{{ url('/clinica/descripcionclinica') }}"><h5 class="card-title">Clinica Sagrada Familia</h5></a>
                    <p class="card-text">Ofrece servicios de Consultas generales, para el público estiliano.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/img/C6.jpg" class="card-img-top" alt="clinica6">
                  <div class="card-body">
                    <a href="{{ url('/clinica/descripcionclinica') }}"><h5 class="card-title">Clinica del Diente</h5></a>
                    <p class="card-text">Ofreciendoles todo en la atención y tratamiento de problemas dentales,
                        coronas, endodoncia, y mucho más.</p>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <br>

        {{--columnas de imagenes con txto--}}
@endsection
