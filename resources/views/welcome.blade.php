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
                        <img src="/img/logo.png" alt="{{ $_ENV['APP_NAME'] }}" width="180px">
                        {{-- <p class="bold md:text-2xl"></p> --}}
                    </a>
                </div>
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </header>
            <main class="mt-2">
                <div class="lg:visible invisible">
                    <div class="relative w-[1024px] mx-auto rounded">
                    <div class="slide relative">
                        <img class="w-full h-[500px] object-cover opacity-90 rounded-xl"
                            src="https://w.wallhaven.cc/full/43/wallhaven-43dl79.jpg">
                        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">
                            Descripción 1
                        </div>
                    </div>

                    <div class="slide relative">
                        <img class="w-full h-[500px] object-cover opacity-90 rounded-xl"
                            src="https://w.wallhaven.cc/full/47/wallhaven-47z7oy.jpg">
                        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">
                            Descripción 2
                        </div>
                    </div>

                    <div class="slide relative">
                        <img class="w-full h-[500px] object-cover opacity-90"
                            src="https://w.wallhaven.cc/full/47/wallhaven-47z7ky.jpg">
                        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">
                            Descripción 3
                        </div>
                    </div>

                    <!-- The previous button -->
                    <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                        onclick="moveSlide(-1)">❮</a>

                    <!-- The next button -->
                    <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                        onclick="moveSlide(1)">❯</a>

                </div>
                <br>

                <!-- The dots -->
                <div class="flex justify-center items-center space-x-5">
                    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
                    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
                    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
                </div>
                </div>
            </main>

            <footer class="w-full py-10 text-sm text-center text-black dark:text-gray/70 bg-lime-500">
                {{ $_ENV['APP_NAME'] }} - Todos los derechos reservados - {{ date('Y') }}
            </footer>
        </div>
    </div>

    <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');
            
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // remove active status from all dots
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-yellow-500');
                dots[i].classList.add('bg-green-600');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');

            // highlight the active dot
            dots[slideIndex - 1].classList.remove('bg-green-600');
            dots[slideIndex - 1].classList.add('bg-yellow-500');
        }
    </script>
</body>

</html>
