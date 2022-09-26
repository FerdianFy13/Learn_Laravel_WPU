@extends('layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <form action="/register" method="POST">
                    @csrf
                    {{-- <img class="mb-4" src="https://source.unsplash.com/100x100/?nature,water" alt="logo"
                    style="display:block; margin:auto;"> --}}
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username"
                            id="name" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@gmail.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Password" required value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit"
                        style="border-radius: 20px">Registration</button>
                </form>
                <small class="mt-3 d-block text-center text-primary">Already Registered? <a href="/login"
                        class="text-decoration-none text-danger">Login</a></small>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; Ferdi 2020 – 2021</p> --}}
            </main>
        </div>
    </div>
@endsection
