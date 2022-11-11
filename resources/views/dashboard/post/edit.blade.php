@extends('dashboard.layout')

@section('content')
    <h1 class="font-bold">Editando el contenido de: </h1>
    - {{ $post->title }}

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        
        @include('dashboard.post._form',["task" => "edit"])
        
    </form>

    
@endsection
