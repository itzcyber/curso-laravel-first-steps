@extends('dashboard.layout')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>
                    {{ $p->title }}
                </td>
                <td>
                    {{ $p->category->title }}
                </td>
                <td>
                    {{ $p->posted }}
                </td>
                <td class="alineador">
                    <a class="my-2 btn btn-primary"  href="{{ route("post.edit", $p) }}">Editar</a>
                    <a class="my-2 btn btn-primary" href="{{ route("post.show", $p) }}">Ver</a>

                    <form action="{{ route("post.destroy", $p) }}" method="post">
                        @method("DELETE")
                        @csrf
                        
                        <button class="btn btn-danger my-3" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="my-2 btn btn-success" href="{{ route("post.create") }}">Crear Post</a>


    {{ $posts->links() }}

@endsection
