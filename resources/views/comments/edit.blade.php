@extends('layouts.app')

@section('title', 'Editar Comentario')

@section('content')
    <h1>Editar Comentario</h1>

    <form action="{{ route('comments.update', $comment) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Contenido:</label>
        <textarea name="content" required>{{ $comment->content }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
@endsection
