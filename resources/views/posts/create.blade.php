@extends('layout')

@section('content')


    <section class="container">
        <div>
            <header>
                <h2 class="text-center mt-4">Nuevo post</h2>
            </header>
        </div>
    </section>

    <div class="container">
        <h3>Complete el formulario</h3>

        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo" class="form-label mt-4">Titulo del post:</label>
                <input type="titulo" class="form-control" id="titulo" name="titulo" placeholder="Ingrese titulo"
                onload="crearSlug(this.value)" onkeyup="crearSlug(this.value)" autocomplete="off">
            </div>
            @error('titulo')
            <p class="text-danger">{{ $errors->first('titulo') }}</p>
            @enderror


            <div class="form-group">
                <fieldset>
                    <label class="form-label mt-4" for="slug">Slug</label>
                    <input class="form-control" id="slug" name="slug" type="text" readonly="">
                </fieldset>
            </div>

            <div class="form-group">
                <label for="image" class="form-label mt-4">Seleccione su imagen:</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*">
            </div>
            @error('image')
            <p class="text-danger">{{ $errors->first('image') }}</p>
            @enderror

            <div class="form-group">
                <label for="descripcion" class="form-label mt-4">Ingrese su texto:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
            </div>
            @error('descripcion')
            <p class="text-danger">{{ $errors->first('descripcion') }}</p>
            @enderror

            <button class="btn btn-primary mt-4" type="submit">Enviar</button>
        </form>
    </div>

@endsection()

@push('scripts')
    <script type="text/javascript">
        console.log("desde script");

    function crearSlug(slug) {


    slug = slug.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

    slug = slug.replace(/^\s+|\s+$/gm, '');

    slug = slug.replace(/\s+/g, '-');

    var input = document.getElementById('slug');

    input.value = slug;
    }
    </script>
@endpush
