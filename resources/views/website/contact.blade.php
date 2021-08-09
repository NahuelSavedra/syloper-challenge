@extends('layout')

@section('content')

    <h2 class="text-center m-4">Contacto</h2>
    <div class="container">
    <form method="POST" action=""{{route('contact.store')}}>
        @csrf
        <fieldset>
            <legend>Formulario de contacto</legend>
            <div class="form-group">
                <label for="nombre" class="form-label mt-4">Nombre y apellido</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre completo">
            </div>
            @error('nombre')
            <p class="text-danger">{{ $errors->first('nombre') }}</p>
            @enderror
            <div class="form-group">
                <label for="email" class="form-label mt-4">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su Email">
            </div>
            @error('email')
            <p class="text-danger">{{ $errors->first('email') }}</p>
            @enderror
            <div class="form-group">
                <label for="comentario" class="form-label mt-4">Su comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
            </div>
            @error('comentario')
            <p class="text-danger">{{ $errors->first('comentario') }}</p>
            @enderror
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </fieldset>
    </form>
    </div>
@endsection
