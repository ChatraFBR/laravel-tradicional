@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fw-bold display-3 text-center mb-4">{{ $post->title }}</h1>

        <!-- Mostrar imagen si existe -->
        @if ($post->image)
            <img src="{{ asset('storage/posts/' . basename($post->image)) }}" alt="Imagen del post" class="img-fluid rounded">
        @endif

        <!-- Contenido del post -->
        <div class="post-content">
            <p>{{ $post->content }}</p>
        </div>

        <hr class="my-4">

        <!-- Sección de comentarios -->
        <h2 class="fw-bold">Comentarios</h2>
        @foreach ($post->comments as $comment)
            <div class="comment-card">
                <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}</p>
            </div>
        @endforeach

        <!-- Formulario para agregar comentario -->
        @auth
            <form action="{{ route('comments.store', ['post' => $post->id]) }}" method="POST">
                @csrf
                <textarea name="content" class="form-control mb-3" rows="3" placeholder="Escribe un comentario..." required></textarea>
                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>
        @endauth
    </div>
@endsection
