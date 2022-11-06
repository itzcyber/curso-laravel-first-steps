@extends('dashboard.layout')

@section('content')
<h1>Crear Post</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="">Title</label>
        <br>
        <input type="text" name="title" value="{{ old('title') }}">

        <br>

        <label for="">Slug</label>
        <br>
        <input type="text" name="slug" value="{{ old('slug') }}">

        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="">Posteado?</label>
        <select name="posted">
            <option value="no">No</option>
            <option value="yes">Si</option>
        </select>

        <br>

        <label for="">Contenido</label>
        <br>
        <textarea name="content""></textarea>

        <br>

        <label for="">Descripción</label>
        <br>
        <textarea name="description"></textarea>

        <br>

        <button type="submit" name="">Crear Post</button>

    </form>




@endsection
