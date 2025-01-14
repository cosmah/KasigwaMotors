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

                <!-- Mobile Menu Button -->
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

        <main class="mt-6 container mx-auto px-4">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2">
                        @if($car->images)
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach($car->images as $imagePath)
                                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                                        <img src="{{ asset('storage/' . $imagePath) }}" 
                                            alt="Car Image" 
                                            class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="md:w-1/2 md:pl-6 mt-6 md:mt-0">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $car->car_model }}</h1>
                        <p class="mt-2 text-lg text-gray-600">{{ $car->car_make }}</p>
                        <p class="mt-2 text-lg text-gray-600">{{ $car->year }}</p>
                        <p class="mt-4 text-gray-700">{{ $car->description }}</p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-900 text-white py-8 mt-12">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-between">
                    <!-- Company Info -->
                    <div class="w-full md:w-1/3 mb-6 md:mb-0">
                        <div class="footer-logo mb-4">
                            <img src="{{ asset('images/logo2.png') }}" alt="Kasigwa Motors Uganda"
                                class="w-24 h-auto mx-auto md:mx-0" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Kasigwa Motors Uganda</h3>
                        <p class="text-gray-400">Your Trusted Partner in Car Sales and Hiring</p>
                        <p class="text-gray-400 mt-2">Walk In, Drive Out</p>
                    </div>

                    <!-- Quick Links -->
                    <div class="w-full md:w-1/3 mb-6 md:mb-0">
                        <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                        <ul>
                            <li class="mb-2"><a href="/" class="hover:text-gray-300">Home</a></li>
                            <li class="mb-2"><a href="/sales" class="hover:text-gray-300">Cars for Sale</a></li>
                            <li class="mb-2"><a href="/hire" class="hover:text-gray-300">Hire a Car</a></li>
                            <li class="mb-2"><a href="/about" class="hover:text-gray-300">About Us</a></li>
                            <li class="mb-2"><a href="/contact" class="hover:text-gray-300">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="w-full md:w-1/3">
                        <h4 class="text-xl font-semibold mb-4">Contact Us</h4>
                        <p class="text-gray-400">1234 Street Name, City, Country</p>
                        <p class="text-gray-400 mt-2">Phone: +256 123 456 789</p>
                        <p class="text-gray-400 mt-2">Email: info@kasigwamotors.com</p>
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-700 pt-4 text-center">
                    <p class="text-gray-500">&copy; 2023 Kasigwa Motors Uganda. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>

 </body>

</html>
