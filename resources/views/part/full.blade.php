<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $judul }} | Arche</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('assets/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <!-- Navbar -->
        @include('part.header')
    <!-- End of Navbar     -->

        @yield('content')

    <!-- footer -->
        @include('part.footer')

    <!-- End of footer -->
</body>
</html>
