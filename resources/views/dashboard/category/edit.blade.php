@extends('dashboard.layout')

@section('content')
    <h1>Editar category: {{ $category->title }}</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update',$category->id) }}" method="post">
        @method("PATCH")
        @section('input_slug')
        <input type="text" name="slug" value="{{old("slug")?old("slug"): $category->slug}}" readonly>
        @endsection

        @include('dashboard.category._form',["task" => "edit"])

    </form>

@endsection
