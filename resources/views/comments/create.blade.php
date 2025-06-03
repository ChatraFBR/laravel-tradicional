@extends('layouts.app')

@section('content')
    <h1>Agregar un comentario</h1>
    <form action="{{ route('comments.store', ['post' => $post->id]) }}" method="POST"> <!-- Se pasa el ID correctamente -->
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">Enviar comentario</button>
    </form>
@endsection
