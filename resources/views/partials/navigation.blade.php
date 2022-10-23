{{--Navegator bar--}}
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
          <img src="/img/logo.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          HEALTHLINK
        </a>
    </div>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>
    <div class="container-fluid">
      <div class="collapse navbar-collapse"  id="navbarNav">
        <a class="navbar-brand" href="{{ route('welcome') }}">Bienvenidos</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clinica') }}">Clinicas Medicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('medicos') }}">Médicos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">Acerca de</a>
          </li>
          {{--<li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Registrate</a>
          </li>--}}
        </ul>
        <form class="d-flex" role="registro">
            <a href="{{ route('login') }}"><button class="btn btn-outline-success" type="submit">Registrate</button></a>
        </form>
      </div>

    </div>
  </nav>
<nav>

