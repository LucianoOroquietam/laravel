<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Laravel 12 | Posts</title>

</head>
<body>
    <h1>Aca se mostrara el post, con el parametro {{ $post  }}</h1>
    <x-alert>
        <x-slot name="title"> Mensaje de informacion desde el post sin category</x-slot>
        Post comun
    </x-alert>
    @if (true)
    <p>condicional con blade</p>

    @endif
</body>
</html>
