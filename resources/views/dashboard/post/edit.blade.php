@extends('dashboard.layout')

@section('content')
    <h1>Editar Post: {{ $post->title }}</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        @section('input_slug')
        <input type="text" name="slug" value="{{old("slug")?old("slug"): $post->slug}}" readonly>
        @endsection



        @include('dashboard.post._form',["task" => "edit"])

    </form>

@endsection
