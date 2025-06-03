@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Barra superior con Cerrar sesión -->
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('logout') }}"
               class="btn btn-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <!-- Título Lista de Posts -->
        <h1 class="fw-bold display-3 text-center mb-4">Lista de Posts</h1>

        <hr class="my-4">

        <!-- Botón de crear post -->
        <div class="text-center mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear nuevo post</a>
        </div>

        <!-- Sección de posts en cuadrícula -->
        <div class="post-container">
            @foreach($posts as $post)
                <div class="post-card">
                    <h2 class="fw-bold">
                        <a href="{{ route('posts.show', $post->id) }}" class="post-link">{{ $post->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
