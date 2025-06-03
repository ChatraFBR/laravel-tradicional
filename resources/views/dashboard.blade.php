@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bienvenido al Dashboard</h1>

        <p>Este es el panel principal de tu aplicación Laravel.</p>

        <div class="mt-4">
            @if(Auth::check())
                <p>Usuario autenticado: {{ Auth::user()->name }}</p>
            @else
                <p>No has iniciado sesión.</p>
            @endif
        </div>
    </div>
@endsection
