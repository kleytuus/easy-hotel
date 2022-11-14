@extends('layouts.app-master')

@section('content')

    <h1 class="container">Home</h1>

    @auth
        <!-- Mostrar el username del usuario -->
        <p>Bienvenido {{auth()->user()->username}}, estás autenticado</p>
        <p>
            <a href="/logout">Logout</a>
        </p>
        <!-- Mostrar el nombre del usuario -->
        <!-- <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estás autenticado</p> -->
    @endauth

    @guest
        <p>Para ver el contenido inicia sesión <a href="/login">Inicia Sesión</a></p>
    @endguest

@endsection
