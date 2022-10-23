@extends('layouts.plantilla')

@section('title', 'Contactos')

@section('meta-description', 'Contactos meta description')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1>Contacto</h1>

    {{--Imagen de fondo con texto--}}
    <div class="card text-bg-light">
        <img src="/resources/img/logo.jpeg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Contactanos</h5>
          <p class="card-text"> Haz click a tu salud!</p>
        </div>
    </div>
@endsection
