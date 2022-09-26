@extends('layout.main')

@section('content')
    <h2 align="center" class="mb-4" style="font-style: bold solid;">Categories Halaman</h2>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/portofolio?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/400x400?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3 text-light"
                                    style="background: rgba(0,0,0,0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
