@extends('welcome')

@section('content')


    <section>
        <div>
            <header>
                <h2>Editar el post</h2>
            </header>
        </div>
    </section>

    <div class="container">
        <h3>Complete el formulario</h3>

        <form method="POST" action="{{route('posts.update',$post)}}" enctype="multipart/form-data">
            @csrf
            <label for="titulo">Title: </label>
            <input type="text" name="titulo"
                   @error('titulo') class="danger" @enderror
                   value="{{ $post->titulo }}">

            @error('titulo')
            <p class="error">{{ $errors->first('titulo') }}</p>
            @enderror

            <br>
            <label for="slug">Slug: </label>
            <input type="text" name="slug"
                   @error('slug') class="danger" @enderror
                   value="{{ $post->slug }}">

            @error('slug')
            <p class="error">{{ $errors->first('slug') }}</p>
            @enderror

            <br>

            <label for="descripcion">Descripcion:</label>
            <textarea @error('descripcion') class="danger" @enderror name="descripcion" id="descripcion" cols="30" rows="10">
            {{ $post->descripcion }}
            </textarea>
            @error('descripcion')
            <p class="error">{{ $errors->first('descripcion') }}</p>
            @enderror
            <br>

            <button class="btn btn-block btn-primary" type="submit">Enviar</button>
        </form>
    </div>

@endsection()
