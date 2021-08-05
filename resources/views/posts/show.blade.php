@extends('welcome')

@section('content')

    <div class="container-fluid">
    <h2 class="text-center mt-4">{{ $post->titulo }}</h2>
    <span class="text-muted">Creando en: {{$post->created_at->format('d M Y')}}</span>
    <p class="mt-4"> {{$post-> descripcion}}</p>
    </div>
    <div class="container d-flex justify-content-end">
    <form class="d-inline-flex m-3" action="{{route('posts.destroy', ['post'=>$post])}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i> Eliminar Post
            </button>
        </form>
        <a href="{{route('posts.edit',['post' => $post])}}" class="btn btn-primary m-3"> <i class="fas fa-edit"></i> Editar post</a>
    </div>

@endsection
