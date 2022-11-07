@extends('dashboard.layout')

@section('content')
<h1>Crear Post</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        
        @section('input_slug')
        <input type="text" name="slug" value="{{ old("slug"), $post->slug }}">
        @endsection
        @include('dashboard.post._form')

    </form>

@endsection
