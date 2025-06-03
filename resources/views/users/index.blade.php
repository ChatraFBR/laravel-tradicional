@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('users.create') }}">Crear nuevo usuario</a>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
