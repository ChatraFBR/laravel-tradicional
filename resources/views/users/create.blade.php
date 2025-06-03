@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
    <h1>Nuevo Usuario</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <button type="submit">Guardar</button>
    </form>
@endsection
