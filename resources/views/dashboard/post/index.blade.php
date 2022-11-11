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
                    Posteado
                </th>
                <th>
                    Imagen
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
                <td>
                    <img class="img ml-auto mr-auto border-gray-600 border-8 border-double" src="{{ asset('image/' . $p->image) }}" width="250px" height="100px" />
                    {{-- <img src="{{ asset('public/image/'.$p->image) }}" alt="" title="image"> --}}
                    {{-- <img src="{{ url('public/image/') }}/{{ $p->image }}" alt=""> --}}
                    {{-- <img src="{{ asset($p->image) }}" width="100" height="100" alt=""> --}}
                    {{-- <img src="image/{{$p->image}}" width="100px" height="100px" alt="{{ $p->image }}"/> --}}
                    {{--  asset('public/image/'.$p->image)  --}}
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
