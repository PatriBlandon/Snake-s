@extends('layouts.app')

@section('title', 'Registro')

@section('content')

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg ">
    <h1 class="text-5xl text-center font-bold">Registro</h1>
        <form class="mt-4" method="POST" action="">
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
                name="Nombre">

                <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
                name="email">

                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
                name="password">

                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar Contraseña"
                name="passwordconf">


                <a href="{{ route('bienvenido.sesion') }}"><button type="button" class="rounded-md bg-blue-500 w-full text-lg text-white font-seimbold p-2 my-3 hover:bg-indigo-600">Enviar</button></a>
        </form>
    </div>

@endsection
