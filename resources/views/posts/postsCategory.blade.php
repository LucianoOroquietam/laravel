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
    @if ($post && $category)
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl font-bold">
                Este es el post que recibe 2 parametros
                <span>{{ $post }}</span> y aca vendria la categoria {{ $category }}
            </h1>
        </div>
    @endif

    <x-alert type='info' class="mb-4">
        <x-slot name='title'>Mensaje de informacion con el post y categoria</x-slot>
        Post con categoria
    </x-alert>
</body>

</html>
