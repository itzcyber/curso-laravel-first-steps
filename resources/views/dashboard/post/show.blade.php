@extends('dashboard.layout')

@section('content')
    <h1 class="font-bold">Viendo el Post: </h1>
    {{ $post->title }}

    <p>Posteado: {{ $post->posted }}</p>

    <p class="font-bold">Descripcion: </p>
    <div class="container">
        {{ $post->description }}
    </div>
    
    <div>Contenido: {{ $post->content }}</div>

    
    <a class="btn" href="/dashboard/post">
        Volver
    </a>

@endsection

