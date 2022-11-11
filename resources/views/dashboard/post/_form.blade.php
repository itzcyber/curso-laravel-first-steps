@csrf

    <br>
        <label class="font-bold" for="">Titul@:</label>
        <input type="text" class="form-control" name="title" value="{{ old("title", $post->title) }}">
        
        @section('input_slug')
        <input class="form-control" type="text" name="slug" value="{{ old("slug"), $post->slug }}">
        @endsection

        <label class="font-bold" for="">Seleccionar una categoria:</label>
        <select class="form-control" name="category_id" id="">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option {{ old("category_id","$post->category_id")  == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label class="font-bold" for="">¿Está posteado?</label>
        <select name="posted" class="form-control">
            <option {{ old("posted",$post->posted) == "no" ? "selected" : "" }} value="no">No</option>
            <option {{ old("posted",$post->posted) == "yes" ? "selected" : "" }} value="yes">Si</option>
        </select>

        <label class="font-bold" for="">Contenido:</label>
        <textarea class="form-control" name="content">{{ old("content",$post->content) }}</textarea>

        <label class="font-bold" for="">Descripción:</label>
        <textarea class="form-control" name="description">{{ old("description",$post->description) }}</textarea>

    
            @if (isset($task) && $task == 'edit')
                <label for="">Imagen</label> 
                <input type="file" name="image">
            @endif

        <br>
        <button class="btn btn-success mt-3 " type="submit" name="">{{ $button? $button:'Crear Post' }}</button>

        <a class="btn" href="/dashboard/post">
            Volver
        </a>