<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel 12 | Plantilla</title>

</head>

<body>



    <header>header plantilla forma 1</header>

    {{ $slot }}


    <footer>footer plantilla forma 1</footer>


</body>

</html>
