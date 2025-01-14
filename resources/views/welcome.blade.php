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

<body class="font-sans antialiased">
    <div class="topnav">

        <div class="flex justify-center">
            <!-- This can be your logo or brand name -->
            <img src="path_to_logo.png" alt="Kasigwa Motors Logo" class="h-auto">
        </div>

        @if (Route::has('login'))
            <nav class="flex justify-end ">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-black">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-black">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-black">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif

    </div>

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

            <!-- Mobile Menu Button -->
            <button id="menuButton" class="block md:hidden text-orange-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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
    <div class="intro">
        {{-- <img src="images/benz.svg" alt="Kasigwa Motors Logo"> --}}
        <h1>Kasigwa Motors Ug. SMC Ltd</h1>
        <p>Your Trusted Partner in Car Sales and Hiring</p>
        <p><strong>Walk In, Drive Out</strong></p>
    </div>
    <div>
        <h2>Our Services</h2>
        <div class="services">
            <div class="service">
                <h3>Car Sales</h3>
                <p>Get the best deals on new and used cars</p>
            </div>
            <div class="service">
                <h3>Car Hire</h3>
                <p>Get the best deals on car hire</p>
            </div>
        </div>
    </div>
    <main class="m-6">
        <div class="featured-cars">
            <div class="header">
                <h2>Featured Cars</h2>
            </div>
            <div
                class="mt-6 bg-white shadow-sm rounded-lg divide-y grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($cars->take(9) as $car)
                    <a href="{{ route('cars.vehicles', $car->id) }}" class="block p-6 flex space-x-2 hover:bg-gray-50">
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
            <div class="btn-1">
                <a href="/sales" class="button">View More Cars</a>
            </div>
        </div>

    </main>
    <div class="emphasis">
        <div class="text">
            <h2 id="h2">Why Choose Us?</h2>
            <p>At Kasigwa Motors, we offer the best deals on new and used cars. We also have a wide range of cars for
                hire.</p>
            <p>Our cars are well maintained and serviced regularly to ensure that you have a smooth ride.</p>
        </div>

    </div>
</body>

</html>
