@extends('layout')

@section('content')
    <section class="container">
                <h2 class="text-center mt-4 p-2">Ultimos Posts</h2>
        <div class="row mb-4">
            <a href="{{route('posts.create')}}" class="btn btn-outline-primary col-2"><i class="fas fa-plus"></i> Crear post</a>
        <form method="GET" action="#" class="d-flex col">
            <input class="form-control me-sm-2" name="search" value="{{request('search')}}" type="text" placeholder="Ingrese su busqueda">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
    </section>

    <section>
            <div class="card-group">
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->titulo }}</h5>
                                    <p class="card-text">{{ Str::limit($post->descripcion, 100) }}</p>
                                    <p class="card-text"><small class="text-muted">Creado en: {{ $post->created_at->format('d M Y') }}</small></p>
                                    <a href="{{route('posts.show',$post)}}" class="btn btn-outline-secondary">Ver más</a>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mb-4 btn-toolbar pagination-sm">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    @endsection
