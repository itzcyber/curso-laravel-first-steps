@extends('dashboard.layout')

@section('content')
    <h1 class="font-bold">Editando el contenido de: </h1>
    - {{ $post->title }}

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        
        @section('input_slug')
        <input class="form-control" type="text" name="slug" value="{{old("slug")?old("slug"): $post->slug}}" readonly>
        @endsection
        
        @include('dashboard.post._form',["task" => "edit"])
    </form>

@endsection
