@csrf

        <label for="">Titul@ de nueva categoria:</label>
        <br>
        <input class="form-control mx-1/3" type="text" name="title" value="{{ old("title", $category->title) }}">
        
        <br>

        <button class="btn btn-success" type="submit" name="">{{ $button? $button:'Crear categoria' }}</button>

        <a class="btn btn-danger" href="/dashboard/category">
            Volver
        </a>