{{--Navegator bar--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light border-3 border-bottom border-primary p-3" id="menu">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/logohealthlink.png" alt="logohealthlink" width="140" height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarNav">
            <a class="navbar-brand" href="{{ url ('/') }}">Inicio</a>
            <ul class="navbar-nav ms-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/clinica') }}">Clinicas Medicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/medicos') }}">Médicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contacto') }}">Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('acercade') }}">Acerca de</a>
                </li>
            </ul>
            <form action="registrate">
                <a href="{{ url('/') }}"><button class="btn btn-primary-outline-success btn-primary" type="submit">Registrate</button></a>
            </form>
        </div>
    </div>
</nav>
