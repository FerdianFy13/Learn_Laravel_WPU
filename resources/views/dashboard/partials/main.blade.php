<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('template_bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Dashboard CSS --}}
    <link rel="stylesheet" href="{{ asset('template_bootstrap/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('template_bootstrap/css/dashboard.rtf.css') }}">

    {{-- TRX Text Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('template_bootstrap/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('template_bootstrap/js/trix.js') }}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

    </style>

    {{-- Feather Icons --}}
    <link rel="stylesheet" href="https://unpkg.com/feather-icons">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    {{-- Navbar --}}
    @section('navbar')
        @include('dashboard.partials.navbar')
    @show

    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}
            @include('dashboard.partials.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                {{-- Dashboard Content --}}
                @yield('dashboard')
            </main>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('template_bootstrap/js/bootstrap.min.js') }}">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>

    <script src="{{ asset('template_bootstrap/js/dashboard.js') }}"></script>
</body>

</html>
