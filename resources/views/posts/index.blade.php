@extends('welcome')

@section('content')
    <section>
        <div>
            <header>
                <h2 class="text-center m-4 ">Ultimos Posts</h2>
            </header>
        </div>
    </section>

    <section>
        <div>
            <div>


                @foreach ($posts as $post)
                    <div>
                        <div>
                            <div>
                                <header>
                                    <h2>{{ $post->titulo }}</h2>
                                </header>

                                <p>Created at:{{ $post->created_at->format('d M Y') }}</p>

                                <p>{{$post->descripcion}}</p>

                                <footer>
                                    <a href="/posts/{{ $post->id }}">Ver más</a>
                                </footer>
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
