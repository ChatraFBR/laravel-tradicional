@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        <h2 class="fw-bold">¿Quieres crear una cuenta?</h2>
        <p>Regístrate para acceder a todas las funciones.</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Crear una cuenta</a>
        <a href="{{ route('login') }}" class="btn btn-secondary mt-2">Iniciar sesión</a>
    </div>
@endsection
