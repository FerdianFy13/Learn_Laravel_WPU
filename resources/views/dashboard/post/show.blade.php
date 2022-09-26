@extends('dashboard.partials.main')

@section('dashboard')
    <div class="container">
        <article>
            <h2 style="text-align: center; font-style: bold;" class="mb-3 text-dark">{{ $posts->title }}</h2>
            <p>By <a href="/portofolio?user={{ $posts->user->username }}"
                    class="text-decoration-none">{{ $posts->user->name }}</a>
                in the <a href="/portofolio?category={{ $posts->category->slug }}"
                    class="text-decoration-none text-danger">{{ $posts->category->name }}</a> </p>
            <a href="/dashboard/post" class="btn btn-primary"><span data-feather="arrow-left"></span> Back To My All
                Post</a>
            <a href="/dashboard/post/{{ $posts->slug }}/edit" class="btn btn-success"><span data-feather="edit"></span>
                Edit</a>
            <form action="/dashboard/post/{{ $posts->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($posts->image)
                <div style="max-height:400px; overflow:hidden;">
                    <img src=" {{ asset('storage/' . $posts->image) }}" class="img-fluid mt-3 col-sm-5">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="img-fluid mt-3">
            @endif
            <p class="card-text mt-1"><small class="text-muted">Update {{ $posts->updated_at }}</small></p>
            <p style="text-align: justify;">{!! $posts->body !!}</p>
            <a href="/portofolio?catgory={{ $posts->category->slug }}" class="text-decoration-none text-danger">read more
                {{ $posts->category->name }}</a>
            <br>
        </article>
    </div>
@endsection
