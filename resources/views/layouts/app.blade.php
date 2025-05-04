<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--'name',texto opcional-->
    <title>@yield('title', 'no me mandaste ningun title')</title>
    @stack('css')
</head>

<body>
    <header>header</header>
    @yield('content')
    <footer>footer</footer>
</body>

</html>
