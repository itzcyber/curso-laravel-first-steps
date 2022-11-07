@csrf

        <label for="">Title</label>
        <br>
        <input type="text" name="title" value="{{ old("title", $post->title) }}">

        <br>

        <label for="">Slug</label>
        <br>
        <input type="text" name="slug" value="{{ old("slug"), $post->slug }}">

        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option {{ old("category_id","$post->category_id")  == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="">Posteado?</label>
        <select name="posted">
            <option {{ old("posted",$post->posted) == "no" ? "selected" : "" }} value="no">No</option>
            <option {{ old("posted",$post->posted) == "yes" ? "selected" : "" }} value="yes">Si</option>
        </select>

        <br>

        <label for="">Contenido</label>
        <br>
        <textarea name="content"" >{{ old("content",$post->content) }}</textarea>

        <br>

        <label for="">Descripción</label>
        <br>
        <textarea name="description">{{ old("description",$post->description) }}</textarea>

        <br>

        <button type="submit" name="">Crear Post</button>

        <br>
        <a href="/">
            Volver
        </a>