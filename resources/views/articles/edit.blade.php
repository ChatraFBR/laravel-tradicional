@extends('layouts.app')

@section('title', 'Editar Artículo')

@section('content')
    <h1>Editar Artículo</h1>

    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Título:</label>
        <input type="text" name="title" value="{{ $article->title }}" required>

        <label>Contenido:</label>
        <textarea name="content" required>{{ $article->content }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
@endsection
