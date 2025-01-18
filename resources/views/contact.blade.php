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
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Kasigwa Motors Uganda" class="w-auto h-auto" />
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex space-x-4">
                <a href="/" class="nav-link hover:text-gray-700">Home</a>
                <a href="/sales" class="nav-link hover:text-gray-700">Cars for Sale</a>
                <a href="/hire" class="nav-link hover:text-gray-700">Hire a Car</a>
                <a href="/about" class="nav-link hover:text-gray-700">About Us</a>
                <a href="/contact" class="nav-link active hover:text-gray-700">Contact Us</a>
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
            <a href="/" class="nav-link block py-2 hover:text-gray-700">Home</a>
            <a href="/sales" class="nav-link block py-2 hover:text-gray-700">Cars for Sale</a>
            <a href="/hire" class="nav-link block py-2 hover:text-gray-700">Hire a Car</a>
            <a href="/about" class="nav-link block py-2 hover:text-gray-700">About Us</a>
            <a href="/contact" class="nav-link active block py-2 hover:text-gray-700">Contact Us</a>
        </div>
    </header>

        <!-- Hero Section -->
        <section class="relative bg-cover bg-center h-30 md:h-96"
            style="background-image: url('{{ asset('images/contact-bg.jpg') }}');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h1 class="text-4xl md:text-6xl text-white font-bold">Get in Touch</h1>
            </div>
        </section>

        <!-- Main Content -->
        <main class="py-16">
            <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">


                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">We'd Love to Hear from You</h2>

                        @if (session('success'))
                            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-600 focus:border-orange-600 @error('name') border-red-500 @enderror"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                    Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-600 focus:border-orange-600 @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-600 focus:border-orange-600 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="bg-orange-600 text-white font-medium py-3 px-6 rounded-md shadow-md hover:bg-orange-700 transition duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <div class="mt-8">
            <div id="map" class="mt-1 mb-1 h-80 w-full rounded-md shadow-md"></div>
        </div>


        <div class="whatsapp fixed bottom-4 right-4 z-50">
            <a href="https://wa.me/256783299472" target="_blank">
                <img src="images/whatsapp.svg" alt="Whatsapp Logo"
                    class="w-16 h-14 shadow-lg rounded-full transition-transform duration-300 ease-in-out transform hover:scale-110">
            </a>
        </div>
        <div class="footer bg-gray-900 text-white py-8">
            <footer class="container mx-auto px-4">
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
                        <p class="text-gray-400">Nakawa, Kampala, Uganda</p>
                        <p class="text-gray-400 mt-2">Phone: +256 123 456 789</p>
                        <p class="text-gray-400 mt-2">Email: info@kasigwamotors.com</p>
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-700 pt-4 text-center">
                    <p class="text-gray-500">&copy; 2025 Kasigwa Motors Uganda. All rights reserved. | <a href="https://cosmah.netlify.app/">Powered By Mark Viral Tech</a></p>
                </div>
            </footer>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyxrRBzwuC30BCbnq2eHDQcRurWTUH0Lk&callback=initMap" async
            defer></script>

        <script>
            function initMap() {
                const location = {
                    lat: 0.344160,
                    lng: 32.640735
                }; // Example coordinates for Kampala, Uganda
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 14,
                    center: location,
                });

                // Add a marker
                new google.maps.Marker({
                    position: location,
                    map: map,
                    title: "Our Location",
                });
            }
        </script>
</body>

</html>
