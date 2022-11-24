@extends('layouts.plantilla')

@section('title', 'Medicos')

@section('meta-description', 'Medicos meta description')

@section('content')
    <h1>Medicos</h1>

     <div class="fondo card text-bg-light">
            <img src="img/fondo1.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Médicos</h5>
              <p class="card-text"> Haz click a tu salud!</p>
            </div>
        </div><br>
        <!--Contenedor de imagen con link redirección-->
    <div class="columna container-text-center">
        <div class="row justify-content-md-center">
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/patricia.jpg" class="card-img-top" alt="..."></a>
                    <h5 class="card-title">Medico1</h5>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic')}}" class="card-link">Card link</a>
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/leonardo.jpg" class="card-img-top" alt="..."></a>
                    <h5 class="card-title">Medico2</h5>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Card link</a>
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-1 col-sm-2 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/andrea.jpg" class="card-img-top" alt="..."></a>
                    <h5 class="card-title">Medico3</h5>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Card link</a>
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        </div> <br>
        <div class="row justify-content-md-center">
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/lauren.jpg" class="card-img-top" alt="..."></a>
                    <h5 class="card-title">Medico4</h5>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Card link</a>
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-2 col-sm-3 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/lauren.jpg" class="card-img-top" alt="..."></a>
                    <h5 class="card-title">Medico5</h5>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Card link</a>
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-1 col-sm-2 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}"><img src="img/andrea.jpg" class="card-img-top" alt="..."></a>
                    <h5 class="card-title">Medico6</h5>
                    <a href="{{ url ('/medicos/perfildoctor/descriptionmedic') }}" class="card-link">Card link</a>
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
