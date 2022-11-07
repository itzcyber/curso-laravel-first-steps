@extends('dashboard.layout')

@section('content')
    <h1>Viendo el Post: {{ $post->title }}</h1>

    <p> {{ $post->posted }}</p>

    <p> {{ $post->description }}</p>
    
    <div> {{ $post->content }}</div>

@endsection
