@extends('layouts.plantilla')
{{--heredamos la clase de plantilla--}}
@section('title', 'Bienvenidos')
@section('meta-description', 'Bienvenidos meta description')
{{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
--}}

@section('content')
      {{--Imagen de fondo con texto--}}
    <div class="container">
        <section class="card text-bg-light" id="tarjeta-bienvenido">
            <img src="img/1.jpg" class="card-img" alt="fondoclinica">
            <div class="card-img-overlay">
              <h1 class="card-title" class="display-1">BIENVENIDO A HEALTHLINK</h1> <hr>
              <h3 class="card-text" class="display-3"> Haz click a tu salud!</h3>
            </div>
        </section>
    </div>
    <br>
@endsection


