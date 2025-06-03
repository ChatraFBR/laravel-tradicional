@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>

    <h2>Imágenes:</h2>
    <ul>
        @foreach ($article->images as $image)
            <li><img src="{{ asset($image->path) }}" alt="Imagen"></li>
        @endforeach
    </ul>

    <h2>Comentarios:</h2>
    <ul>
        @foreach ($article->comments as $comment)
            <li>{{ $comment->content }} - <strong>{{ $comment->user->name }}</strong></li>
        @endforeach
    </ul>

    <a href="{{ route('articles.edit', $article) }}">Editar Artículo</a>

    <form action="{{ route('articles.destroy', $article) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este artículo?')">Eliminar Artículo</button>
    </form>
@endsection
