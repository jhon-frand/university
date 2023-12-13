<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Universidad</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

    </head>
    <body class="antialiased flex flex-col justify-between h-screen">
        <header class="">
           <nav class="bg-gray-900 flex justify-between items-center h-20">
            <h1 class="font-bold text-3xl text-gray-200" >UNIVERSITY</h1>
            <a href="/login" class="font-bold text-sm text-gray-300">INICIAR SESIÓN</a>
           </nav>
        </header>
        <main class="bg-gray-100 h-screen flex flex-col ">
           <h1 class="font-bold"> @yield('titulo')</h1>
            @yield('contenido')
        </main>
        <footer class="bg-gray-500 h-[50px] flex justify-center items-center">
            <h1 class="text-white text-sm">FRAND'S UNIVERSITY - Todos los derechos reservados</h1>
        </footer>
    </body>
</html>
