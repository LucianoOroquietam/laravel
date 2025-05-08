<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel 12 | Crud</title>

</head>

<body  class="min-h-screen flex flex-col @yield('body-class', 'bg-black')">
    <header class="bg-black text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">
                <a href="/">    Mi Blog</a>

            </h1>
            <nav class="space-x-4">
                <a href="/" class="hover:text-gray-300 transition">Inicio</a>
                <a href="/posts" class="hover:text-gray-300 transition">Posts</a>
                <a href="/contacto" class="hover:text-gray-300 transition">Contacto</a>
            </nav>
        </div>
    </header>
<hr>
    <main>
        {{ $slot }}
    </main>


<hr>
    <footer class="bg-black text-white mt-auto">
        <div class="max-w-7xl mx-auto px-4 py-10">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-sm">&copy; {{ date('Y') }} Mi Blog. Todos los derechos reservados.</p>
                <div class="space-x-4">
                    <a href="#" class="hover:text-gray-300 transition">Privacidad</a>
                    <a href="#" class="hover:text-gray-300 transition">Términos</a>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>
