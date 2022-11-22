<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> | Arche</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
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
