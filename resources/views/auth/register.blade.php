@extends('layouts.auth-master')

@section('content')

    <form action="/register" method="POST">
        @csrf
        <h1>Registrarse</h1>
        <div class="form-floating mb-3">
            <input type="text" placeholder="username" autofocus name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" placeholder="email" name="email" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Correo electrónico</label>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="password" name="password" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="password_confirmation" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <p>¿Ya tienes una cuenta? <a href="/login">Iniciar sesión</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

@endsection
