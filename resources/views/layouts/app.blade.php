<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healtlink -- @yield('title') </title>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-blue-500 text-white">
        <div class="w-1/2 px-10 mr-auto">
            <p class="text-2x1 font-bold">Healtlink</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li>
                <a href="sesion" class="font-seimbold hover:bg-indigo-700 py-3 px-4 rounded-md">Inicio de sesion</a>
                <a href="registro" class="font-seimbold border-2 border-white py-2 px-4 hover:bg-white hover:text-indigo-700 rounded-md">Registro</a>

            </li>
        </ul>

    </nav>
@yield('content')

</body>
</html>
