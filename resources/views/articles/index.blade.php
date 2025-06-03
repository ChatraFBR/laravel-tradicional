@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
    <h1>Artículos</h1>
    <a href="{{ route('articles.create') }}">Crear nuevo artículo</a>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
