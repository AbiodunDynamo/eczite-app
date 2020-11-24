<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eczite - {{$title}}</title>
    @stack('css')
</head>
<body>
@include('sweetalert::alert')
@stack('header')
@yield('content')

<footer>
</footer>
@stack('js')
</body>
</html>
