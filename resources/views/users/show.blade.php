@extends('layouts.app')

@section('title', 'Perfil de Usuario')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>

    <h2>Artículos escritos:</h2>
    <ul>
        @foreach ($user->articles as $article)
            <li><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>

    <h2>Comentarios:</h2>
    <ul>
        @foreach ($user->comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul>

    <a href="{{ route('users.edit', $user) }}">Editar Usuario</a>

    <form action="{{ route('users.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">Eliminar Usuario</button>
    </form>
@endsection
