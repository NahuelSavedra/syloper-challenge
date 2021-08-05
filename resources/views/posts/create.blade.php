@extends('welcome')

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
                <label for="titulo" class="form-label mt-4">Titulo</label>
                <input type="titulo" class="form-control" id="titulo" name="titulo" placeholder="Ingrese titulo">
            </div>
            @error('titulo')
            <p class="text-danger">{{ $errors->first('titulo') }}</p>
            @enderror


            <div class="form-group">
                <fieldset>
                    <label class="form-label mt-4" for="slug">Slug</label>
                    <input class="form-control" id="slug" name="slug" type="text">
                </fieldset>
            </div>

            <div class="form-group">
                <label for="descripcion" class="form-label mt-4">Ingrese su texto</label>
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
    <script>
    function crearURL(slug){
    slug = slug.replace(/\s+/g, '-');
    document.getElementById("slug").innerHTML = slug;
    }
    </script>
@endpush
