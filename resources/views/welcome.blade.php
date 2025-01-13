<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kasigwa Motors Uganda</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        
        @endif
    </head>
    <body class="font-sans antialiased ">
        <div class="">
            <header class="">
                <nav class="flex justify-between items-center w-full px-4">
                    <!-- Logo -->
                    <div>
                        <img src="{{ asset('images/logo.png') }}" alt="Kasigwa Motors Uganda" class="w-auto h-auto" />
                    </div>
                    <!-- Navigation Links -->
                    <div class="links flex space-x-4">
                        <a href="#/" class="hover:text-gray-700">Home</a>
                        <a href="#cars" class="hover:text-gray-700">Cars for Sale</a>
                        <a href="#hire" class="hover:text-gray-700">Hire a Car</a>
                        <a href="#testimonials" class="hover:text-gray-700">Testimonials</a>
                        <a href="#contact" class="hover:text-gray-700">Contact Us</a>
                    </div>
                </nav>
            </header>
                   
                    <main class="mt-6">
                        
                    </main>
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
           
    </body>
</html>
