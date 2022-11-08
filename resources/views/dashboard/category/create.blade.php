@extends('dashboard.layout')

@section('content')
<h1>Crear category</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.store') }}" method="post">
        
        @section('input_slug')
        <input type="text" name="slug" value="{{ old("slug"), $category->slug }}">
        @endsection
        @include('dashboard.category._form')

    </form>

@endsection
