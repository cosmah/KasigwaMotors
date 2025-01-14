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
        <header class="bg-white">
            <nav class="flex justify-between items-center w-full px-4">
                <!-- Logo -->
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Kasigwa Motors Uganda" class="w-auto h-auto" />
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex space-x-4">
                    <a href="/" class="nav-link active hover:text-gray-700">Home</a>
                    <a href="/sales" class="nav-link hover:text-gray-700">Cars for Sale</a>
                    <a href="/hire" class="nav-link hover:text-gray-700">Hire a Car</a>
                    <a href="/about" class="nav-link hover:text-gray-700">About Us</a>
                    <a href="/contact" class="nav-link hover:text-gray-700">Contact Us</a>
                </div>

                <!-- Mobile Menu Button - Now part of the same flex container -->
                <button id="menuButton" class="block md:hidden text-orange-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </nav>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden px-4 py-2">
                <a href="/" class="nav-link active block py-2 hover:text-gray-700">Home</a>
                <a href="/sales" class="nav-link block py-2 hover:text-gray-700">Cars for Sale</a>
                <a href="/hire" class="nav-link block py-2 hover:text-gray-700">Hire a Car</a>
                <a href="/about" class="nav-link block py-2 hover:text-gray-700">About Us</a>
                <a href="/contact" class="nav-link block py-2 hover:text-gray-700">Contact Us</a>
            </div>
        </header>



        <main class="mt-6">
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($cars as $car)
                    <a href="{{ route('cars.vehicles', $car->id) }}"
                        class="block p-6 flex space-x-2 hover:bg-gray-50">
                        <div class="flex-1">
                            @if ($car->images)
                                <div class="relative overflow-hidden rounded-lg shadow-lg">
                                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="Car Image"
                                        class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                                </div>
                            @endif
                            <p class="mt-4 text-lg text-gray-900">{{ $car->car_model }}</p>
                            <p class="mt-2 text-sm text-gray-600">{{ $car->car_make }}</p>
                            <p class="mt-2 text-sm text-gray-600">{{ $car->year }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </main>
        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>


    <
</body>

</html>
