<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Post</h1>

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="">Title</label>
        <br>
        <input type="text" name="title">

        <br>

        <label for="">Slug</label>
        <br>
        <input type="text" name="slug">

        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="">Posteado?</label>
        <select name="posted">
            <option value="no">No</option>
            <option value="yes">Si</option>
        </select>

        <br>

        <label for="">Contenido</label>
        <br>
        <textarea name="content"></textarea>

        <br>

        <label for="">Descripción</label>
        <br>
        <textarea name="description"></textarea>

        <br>

        <button type="submit" name="title">Enviar</button>

    </form>




</body>
</html>
