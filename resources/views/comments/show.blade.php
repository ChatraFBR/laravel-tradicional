@extends('layouts.app')

@section('title', 'Comentario de ' . $comment->user->name)

@section('content')
    <h1>Comentario</h1>
    <p>{{ $comment->content }}</p>
    <p>Publicado por: {{ $comment->user->name }}</p>
    <p>Artículo: <a href="{{ route('articles.show', $comment->article) }}">{{ $comment->article->title }}</a></p>

    <a href="{{ route('comments.edit', $comment) }}">Editar Comentario</a>

    <form action="{{ route('comments.destroy', $comment) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este comentario?')">Eliminar Comentario</button>
    </form>
@endsection
