<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $_ENV['APP_NAME'] }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="text-white bg-gray-900">
        {{-- Fondo de pantalla aquí --}}
        {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="/img/xcion 1080x1980_PNG.png" /> --}}
        <div class="absolute grid grid-cols-1 content-center h-screen w-full">
            <div class="flex items-center justify-center">
                <img class="absolute w-full h-full inset-0 object-cover object-top" 
                id="background" src="/img/bg_food.jpg" alt="logo de la app" />
            </div>
        </div>
        <div class="relative flex flex-col items-center justify-between min-h-screen selection:text-white">
            <header
                class="grid items-center justify-between w-full grid-cols-2 gap-2 p-5 py-8 lg:grid-cols-3 bg-lime-500">
                <div class="flex text-gray-700 font-bold lg:justify-center lg:col-start-2">
                    <a href="/" class="flex items-center flex-col md:flex-row">
                        <img src="/img/logo.png" alt="{{ $_ENV['APP_NAME'] }}" width="160px">
                        {{-- <p class="bold md:text-2xl"></p> --}}
                    </a>
                </div>
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </header>
            <main class="mt-2">
                {{-- Poner el contenido informativo aquí --}}
                <div class="flex justify-center items-center flex-col sm:flex-row">
                    <div class="w-1/2 sm:flex justify-center">
                        <img class="" src="img/xcion.png" alt="ruta web" width="200">
                    </div>
                    <div class="w-1/2">
                        <p class="text-gray-700 text-2xl">
                            Ingresa a nuestra web escaneando el código QR
                        </p>
                    </div>
                </div>
            </main>

            <footer class="w-full py-10 text-sm text-center text-black dark:text-gray/70 bg-lime-500">
                {{ $_ENV['APP_NAME'] }} - Todos los derechos reservados - {{ date('Y') }}
            </footer>
        </div>
    </div>
</body>

</html>
