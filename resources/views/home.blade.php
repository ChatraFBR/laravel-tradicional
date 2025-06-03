@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fw-bold display-3 text-center mb-4">Últimos Posts</h1>

        <hr class="my-4">

        <!-- Enlace para crear un nuevo post -->
        <div class="text-center mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Post</a>
        </div>

        <!-- Sección de últimos posts -->
        <div class="post-container">
            @foreach($latestPosts as $post)
                <div class="post-card">
                    <h2 class="fw-bold">
                        <a href="{{ route('posts.show', $post->id) }}" class="post-link">{{ $post->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
