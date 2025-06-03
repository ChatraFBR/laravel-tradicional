@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fw-bold display-3 text-center mb-4">Crear Nuevo Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Título del post -->
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <!-- Contenido del post -->
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>

            <!-- Subida de imagen -->
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
@endsection
