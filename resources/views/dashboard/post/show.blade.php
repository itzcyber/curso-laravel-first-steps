@extends('dashboard.layout')

@section('content')
    <h1>Viendo el Post: {{ $post->title }}</h1>

    <p>Posted: {{ $post->posted }}</p>

    <p>Descripcion: {{ $post->description }}</p>
    
    <div>Contenido: {{ $post->content }}</div>

@endsection
