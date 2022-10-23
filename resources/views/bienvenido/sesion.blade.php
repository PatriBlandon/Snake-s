@extends('layouts.app')

@section('title', 'Sesion')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg ">

    <h1 class="text-5xl text-center font-bold">Iniciar Sesion</h1>
    <form class="mt-4" method="POST" action="">


        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
        name="email">

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
        name="password">

        <a href="bienvenido" class="text-left text-blue-400 underline">Olvido su contraeña?</a>

        <a href="{{ route('welcome') }}"><button type="button" class="rounded-md bg-blue-500 w-full text-lg text-white font-seimbold p-2 my-3 hover:bg-indigo-600">Entrar</button></a>
    </form>

    </div>
@endsection
