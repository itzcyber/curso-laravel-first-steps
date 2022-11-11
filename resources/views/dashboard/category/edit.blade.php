@extends('dashboard.layout')

@section('content')
    <h1 class="font-bold">Editar categoria:</h1>
    <br>
    <div class="container border shadow-sm mx-auto">
        <h1> {{ $category->title }}</h1>

    </div>
    
    <br>
    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update',$category->id) }}" method="post">
        @method("PATCH")
        @section('input_slug')

        @endsection
        @include('dashboard.category._form',["task" => "edit"])

    </form>

@endsection
