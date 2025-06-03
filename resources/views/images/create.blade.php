@extends('layouts.app')

@section('title', 'Subir Imagen')

@section('content')
    <h1>Subir Nueva Imagen</h1>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Seleccionar imagen:</label>
        <input type="file" name="image" required>

        <label>Seleccionar artículo:</label>
        <select name="article_id">
            @foreach ($articles as $article)
                <option value="{{ $article->id }}">{{ $article->title }}</option>
            @endforeach
        </select>

        <button type="submit">Subir Imagen</button>
    </form>
@endsection
