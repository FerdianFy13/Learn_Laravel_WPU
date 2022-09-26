@extends('layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <form action="/login" method="POST">
                    @csrf
                    <img class="mb-4" src="https://source.unsplash.com/100x100/?nature,water" alt="logo"
                        style="display:block; margin:auto;">
                    <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit"
                        style="border-radius: 20px">Login</button>
                </form>
                <small class="mt-3 mb-2 d-block text-center text-primary">Not Registered? <a href="/register"
                        class="text-decoration-none text-danger">Register Now!</a></small>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; Ferdi 2020 – 2021</p> --}}
            </main>
        </div>
    </div>
@endsection
