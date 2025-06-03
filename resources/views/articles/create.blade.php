@extends('layouts.app')

@section('title', 'Crear Artículo')

@section('content')
    <h1>Nuevo Artículo</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="title" required>

        <label>Contenido:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Guardar</button>
    </form>
@endsection
