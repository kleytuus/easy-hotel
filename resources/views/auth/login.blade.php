@extends('layouts.auth-master')

@section('content')

    <form action="/login" method="POST">
        @csrf
        <h1>Iniciar sesión</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario / Correo electrónico</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <p>¿Aún no tienes cuenta? <a href="/register">Registrate aquí</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

@endsection
