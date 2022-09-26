@extends('dashboard.partials.main')

@section('dashboard')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">category Category</h1>
    </div>

    {{-- session alert confirm for insert this layout all my category --}}
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- session alert confirm for delete this layout all my category --}}
    @if (session()->has('delete'))
        <div class="alert alert-danger col-lg-10" role="alert">
            {{ session('delete') }}
        </div>
    @endif

    {{-- session alert confirm for update this layout all my category --}}
    @if (session()->has('update'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('update') }}
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/categories/create" class="btn btn-warning mb-2">Create New Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="text-center"><a href="/dashboard/categories/{{ $category->slug }}"
                                class="badge bg-primary"><span data-feather="eye"></span></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-success"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="category" class="d-inline">
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
