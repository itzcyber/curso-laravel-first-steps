@extends('dashboard.layout')

@section('content')

<div class="container card shadow-sm">

    <h1 class="font-bold">Viendo la categoria:</h1>
    <br>
    <h1> {{ $category->title }}</h1>

    <br>

    <a class="btn btn-danger" href="/dashboard/category">
        Volver
    </a>

    

</div>


@endsection
