@extends('layouts.app')

@section('title', 'Lista de Comentarios')

@section('content')
    <h1>Comentarios</h1>
    <a href="{{ route('comments.create') }}">Agregar un comentario</a>
    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->content }} - <strong>{{ $comment->user->name }}</strong> en
                <a href="{{ route('articles.show', $comment->article) }}">{{ $comment->article->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
