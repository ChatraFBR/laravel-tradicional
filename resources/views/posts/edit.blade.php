@extends('layouts.app')

@section('content')
    <h1>Editar Blog</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título:</label>
        <input type="text" name="title" value="{{ $post->title }}" required>

        <label>Contenido:</label>
        <textarea name="content" required>{{ $post->content }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
@endsection
