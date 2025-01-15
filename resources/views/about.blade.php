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
                    <a href="/" class="nav-link  hover:text-gray-700">Home</a>
                    <a href="/sales" class="nav-link hover:text-gray-700">Cars for Sale</a>
                    <a href="/hire" class="nav-link hover:text-gray-700">Hire a Car</a>
                    <a href="/about" class="nav-link active hover:text-gray-700">About Us</a>
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
                <a href="/" class="nav-link  block py-2 hover:text-gray-700">Home</a>
                <a href="/sales" class="nav-link block py-2 hover:text-gray-700">Cars for Sale</a>
                <a href="/hire" class="nav-link block py-2 hover:text-gray-700">Hire a Car</a>
                <a href="/about" class="nav-link active block py-2 hover:text-gray-700">About Us</a>
                <a href="/contact" class="nav-link block py-2 hover:text-gray-700">Contact Us</a>
            </div>
        </header>

        <main class="about-main py-16 bg-gray-50">
            <div class="about-us max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">
                        About <span class="text-orange-600">Kasigwa Motors</span>
                    </h1>
                    <p class="text-lg text-gray-600 mt-4">
                        Drive In, Walk Out
                    </p>
                </div>
        
                <!-- Content Section -->
                <div class="about-content grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Text Content -->
                    <div class="text-content space-y-6">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Kasigwa Motors Uganda is a trusted car sales and hire company with decades of experience in
                            delivering quality vehicles to satisfied clients.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Whether you're looking to buy or rent, our diverse fleet is meticulously maintained and
                            regularly serviced to meet your needs. We prioritize safety, reliability, and customer satisfaction
                            in every interaction.
                        </p>

                        <div class="mt-2 bg-white rounded-xl shadow-md">
                            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Our Mission</h2>
                            <p class="text-center text-lg text-gray-600 leading-relaxed">
                                At Kasigwa Motors, we aim to provide our clients with exceptional service and high-quality vehicles,
                                ensuring a smooth and reliable experience every time. Your journey is our priority.
                            </p>
                        </div>
                        <a href="/contact"
                            class="inline-block bg-orange-600 text-white font-medium py-3 px-6 rounded-md shadow-md hover:bg-orange-700 transition duration-300">
                            Contact Us
                        </a>

                    </div>
        
                    <!-- Image Content -->
                    <div class="image-content flex justify-center">
                        <img src="{{ asset('images/234.png') }}" alt="Kasigwa Motors Uganda"
                            class="max-w-full h-auto rounded-xl" />
                    </div>
                    
                </div>
        
                <!-- Testimonials Section -->
                <div>
                    <h2>Testimonials</h2>
                    <div class="services">
                        <div class="service">
                            <h3><strong>- Kwesiga Mark</strong></h3>
                            <p>Kasigwa Motors provided me with the perfect car for my trip. Highly recommended!</p>
                        </div>
                        <div class="service">
                            <h3>- Kato Smith</h3>
                            <p>Smooth and professional service. I'll definitely return for future rentals!</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

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
                    <p class="text-gray-400">1234 Street Name, City, Country</p>
                    <p class="text-gray-400 mt-2">Phone: +256 123 456 789</p>
                    <p class="text-gray-400 mt-2">Email: info@kasigwamotors.com</p>
                </div>
            </div>

            <div class="mt-8 border-t border-gray-700 pt-4 text-center">
                <p class="text-gray-500">&copy; 2025 Kasigwa Motors Uganda. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>
