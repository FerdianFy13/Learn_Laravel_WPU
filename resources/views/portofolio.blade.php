@extends('layout.main')

@section('content')
    <h2 style="text-align:center; font-style: bold;" class="mb-4">{{ $title }} Page</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/portofolio">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class=" input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search ..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($post->count() > 0)
        <div class="card mb-3 mt-4" align="justify" style="background: lavender; border: black solid">
            @if ($post[0]->image)
                <div style="max-height: 350px; overflow: auto;">
                    <img src=" {{ asset('storage/' . $post[0]->image) }}" class="img-fluid mt-3"
                        alt="{{ $post[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="img-fluid mt-3">
            @endif
            <div class="card-body">
                <h5 class="card-title"> <a href="/post/{{ $post[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h5>
                <p>By <a href="/portofolio?user={{ $post[0]->user->username }}"
                        class="text-decoration-none">{{ $post[0]->user->name }}</a> in the <a
                        href="/portofolio?category={{ $post[0]->category->slug }}"
                        class="text-decoration-none text-danger">{{ $post[0]->category->name }}
                        <a>Create at {{ $post[0]->created_at->diffForHumans() }}</a>
                    </a>
                </p>
                <p class="card-text">{{ $post[0]->description }}</p>
                <p class="card-text"><small class="text-muted">Update {{ $post[0]->updated_at }}</small></p>
                <a href="/post/{{ $post[0]->slug }}" class="pb-3 text-decoration-none text-dark btn btn-info">
                    Read more about
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($post->skip(1) as $posts)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                <a href="/portofolio?category={{ $posts->category->slug }}"
                                    class="text-light text-decoration-none txt-center">
                                    {{ $posts->category->name }}</a>
                            </div>
                        </div>
                        @if ($posts->image)
                            <div style="max-height: 400px; overflow: hidden;">
                                <img src=" {{ asset('storage/' . $posts->image) }}" class="img-fluid"
                                    alt="{{ $posts->category->name }}">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}"
                                class="img-fluid" alt="{{ $posts->category->name }}">
                        @endif
                        <div class="card-body"
                            style="background-color: whitesmoke; border: black solid transparent 1px;">
                            <h5 class="card-title"> <a href="/post/{{ $posts->slug }}"
                                    class="text-decoration-none text-dark">{{ $posts->title }}</a></h5>
                            <p>By <a href="/portofolio?user={{ $posts->user->username }}"
                                    class="text-decoration-none">{{ $posts->user->name }}</a>
                            </p>
                            <p class="card-text">{{ $posts->description }}</p>
                            <p class="card-text"><small class="text-muted"> {{ $posts->updated_at }}</small>
                            </p>
                            <a href="/post/{{ $posts->slug }}"
                                class="pb-3 text-decoration-none text-light btn btn-success">
                                Read more about
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p align="center">There are no posts because the posts are out</p>
    @endif

    <div class="d-flex justify-content-center">
        {!! $post->links() !!}
    </div>

@endsection
