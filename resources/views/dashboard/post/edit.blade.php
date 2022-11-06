@extends('dashboard.layout')

@section('content')
    <h1>Editar Post: {{ $post->title }}</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update',$post->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="">Title</label>
        <br>
        <input type="text" name="title" value="{{ $post->title }}">

        <br>

        <label for="">Slug</label>
        <br>
        <input type="text" name="slug" value="{{ $post->slug }}">

        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected' : '' }} value="{{ $id }}"> {{ $title }} </option>
            @endforeach
        </select>

        <label for="">Posteado?</label>
        <select name="posted">
            <option {{ $post->posted == "no" ? 'selected' : '' }} value="no">No</option>
            <option {{ $post->posted == "yes" ? 'selected' : '' }} value="yes">Si</option>
        </select>

        <br>

        <label for="">Contenido</label>
        <br>
        <textarea name="content">{{ $post->content }}</textarea>

        <br>

        <label for="">Descripción</label>
        <br>
        <textarea name="description">{{ $post->description }}</textarea>

        <br>

        <button type="submit" name="">Crear Post</button>

        <br>
        <a href="/">
            Volver
        </a>

    </form>

@endsection
