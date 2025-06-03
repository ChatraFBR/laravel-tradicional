@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <button type="submit">Actualizar</button>
    </form>
@endsection
