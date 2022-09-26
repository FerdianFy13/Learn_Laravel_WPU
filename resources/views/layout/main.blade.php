<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('template_bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template_bootstrap/css/style.css') }}">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body style="background:lavender">
    @section('navbar')
        @include('layout.navbar')
    @show

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('template_bootstrap/js/bootstrap.min.js') }}">
    </script>

    {{-- Option 2: Dashboard JS --}}
    <script src="{{ asset('template_bootstrap/js/dashboard.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
</body>

</html>
