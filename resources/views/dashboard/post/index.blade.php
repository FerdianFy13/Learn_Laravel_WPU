@extends('dashboard.partials.main')

@section('dashboard')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Portfolio</h1>
    </div>

    {{-- session alert confirm for insert this layout all my post --}}
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- session alert confirm for delete this layout all my post --}}
    @if (session()->has('delete'))
        <div class="alert alert-danger col-lg-10" role="alert">
            {{ session('delete') }}
        </div>
    @endif

    {{-- session alert confirm for update this layout all my post --}}
    @if (session()->has('update'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('update') }}
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/post/create" class="btn btn-warning mb-2">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="text-center"><a href="/dashboard/post/{{ $post->slug }}"
                                class="badge bg-primary"><span data-feather="eye"></span></a>
                            <a href="/dashboard/post/{{ $post->slug }}/edit" class="badge bg-success"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/post/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure you want to delete this')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
