@extends('dashboard.layout')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $c)
            <tr>
                <td>
                    {{ $c->title }}
                </td>
                <td class="alineador border">
                    <a class="btn btn-primary mt-2" href="{{ route("category.edit", $c) }}">Editar</a>
                    <a class="btn btn-primary mt-2" href="{{ route("category.show", $c) }}">Ver</a>
                    <form action="{{ route("category.destroy", $c) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success my-3" href="{{ route("category.create") }}">Crear categoria</a>

    {{ $categories->links() }}

@endsection
