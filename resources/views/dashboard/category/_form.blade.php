@csrf

        <label for="">Title</label>
        <br>
        <input type="text" name="title" value="{{ old("title", $category->title) }}">

        <br>

        <label for="">Slug</label>
        <br>
        
        @yield('input_slug')
        
        <br>

        <button type="submit" name="">{{ $button? $button:'Crear Categoria' }}</button>

        <br>
        <a href="/">
            Volver
        </a>