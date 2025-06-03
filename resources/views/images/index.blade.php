@extends('layouts.app')

@section('title', 'Lista de Imágenes')

@section('content')
    <h1>Imágenes</h1>
    <a href="{{ route('images.create') }}">Subir nueva imagen</a>
    <ul>
        @foreach ($images as $image)
            <li><img src="{{ asset($image->path) }}" alt="Imagen"></li>
        @endforeach
    </ul>
@endsection
