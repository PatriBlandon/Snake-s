<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{--La etiqueta de titulo se añade aqui para todos y se cambia en cada una de las vistas--}}
    <title>HEALTHLINK -- @yield('title')</title>
    {{--Otra forma de escribirlo pero con modelo blade--}}
    {{--<title>HealthLink -- {{$title ?? ''}}</title>--}}

    <!--Aquí se sobre escribe el nombre en las inspecciones-->
    <meta name="description" content="@yield('meta-description', 'Default meta description')" />
    {{--<meta name="description" content="{{ $meta-description?? 'Default meta description'}}" />--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/modo.css" rel="stylesheet">

</head>
<body>
{{--Forma de armarlo pero con componentes--}}
{{--<x-navigation/>--}}
    @include('partials.navigation')
{{--utilizamos herencia--}}

    @yield('content')

    <footer class="bg-primary text-white pt-5 pb4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-light text-warning">Healthlink</h5>
                        <p>Contactanos</p>
                        <p>healthlinknic@gmail.com</p>
                        <p>---  +505 57180261  -- </p>
                    </div>                 
                      
                    <hr class="mb-4">

                    <div class="row align-items-center">
                        <p>
                            Copyright @copy Healthlink 2022 All rights reserved by:
                            <a href="#" style="text-decoration: none">
                                <strong class="text-warning">HEALTHLINKNIC2022</strong>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!--   Optional JS   -->
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
  <!--   Argon JS   -->
    <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
</body>
</html>
