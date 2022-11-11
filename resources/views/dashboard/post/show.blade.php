@extends('dashboard.layout')

@section('content')

    <h1 class="font-bold">Viendo el siguiente Post: </h1>
    <div class="underline ">
        "{{ $post->title }}"
    </div>
    <br>
    <p class="font-bold">Posteado: {{ $post->posted }}</p>

    <p class="font-bold">Descripcion: </p>
    <div class="container card">
        {{ $post->description }}
    </div>
    
    <div class="font-bold">Contenido: </div>
    <div class="container card mx-auto">
        {{ $post->content }}
    </div>
    
    <a class="btn" href="/dashboard/post">
        Volver
    </a>

@endsection

