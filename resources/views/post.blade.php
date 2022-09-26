@extends('layout.main')

@section('content')
    <article>
        <h2 style="text-align: center; font-style: bold;" class="mb-3 text-dark">{{ $posts->title }}</h2>
        <p>By <a href="/portofolio?user={{ $posts->user->username }}"
                class="text-decoration-none">{{ $posts->user->name }}</a>
            in the <a href="/portofolio?category={{ $posts->category->slug }}"
                class="text-decoration-none text-danger">{{ $posts->category->name }}</a> </p>
        @if ($posts->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src=" {{ asset('storage/' . $posts->image) }}" class="img-fluid"
                    alt="{{ $posts->category->name }}">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="img-fluid"
                alt="{{ $posts->category->name }}">
        @endif
        <p class="card-text mt-1"><small class="text-muted">Update {{ $posts->updated_at }}</small></p>
        <p style="text-align: justify;">{!! $posts->body !!}</p>
        <a href="/portofolio" class="text-decoration-none text-primary">back to portofolio <br></a>
        <br>
    </article>
@endsection
