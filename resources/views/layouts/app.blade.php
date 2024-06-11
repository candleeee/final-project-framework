<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ $pageTitle }}</title> --}}
    @vite('resources/css/app.css')
    <!-- Include Bootstrap CSS -->
    @vite('resources/css/bundle.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <!-- Include Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @stack('scripts')
    @vite('resources/js/bundle.js')
    {{-- <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
