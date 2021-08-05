@extends('welcome')

@section('content')


    <h2 class="text-center">{{ $post->titulo }}</h2>
    <span>Creando en: {{$post->created_at->format('d M Y')}}</span>
    <p> {{$post-> descripcion}}</p>

        <form class="d-inline-flex" action="{{route('posts.destroy', ['post'=>$post])}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger fa fa-trash btn-eliminar">
                Eliminar Post
            </button>
        </form>
        <a href="{{route('posts.edit',['post' => $post])}}"></a>

@endsection
