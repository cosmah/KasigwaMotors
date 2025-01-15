<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Kasigwa Motors Uganda</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <div>
        <header class="bg-white shadow-md">
            <nav class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
                <!-- Logo -->
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Kasigwa Motors Uganda" class="h-10" />
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="/" class="hover:text-orange-600">Home</a>
                    <a href="/sales" class="hover:text-orange-600">Cars for Sale</a>
                    <a href="/hire" class="hover:text-orange-600">Hire a Car</a>
                    <a href="/about" class="hover:text-orange-600">About Us</a>
                    <a href="/contact" class="text-orange-600 font-semibold">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="menuButton" class="block md:hidden text-orange-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </nav>
        </header>

        <!-- Hero Section -->
        <section class="relative bg-cover bg-center h-64 md:h-96"
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">We’d Love to Hear from You</h2>
                        <p class="text-lg text-gray-600 mb-8">
                            Whether you have questions about our services, need assistance, or want to share feedback,
                            we’re here to help.
                        </p>
                        <form action="/send-message" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-600 focus:border-orange-600">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                    Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-600 focus:border-orange-600">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-600 focus:border-orange-600"></textarea>
                            </div>
                            <button type="submit"
                                class="bg-orange-600 text-white font-medium py-3 px-6 rounded-md shadow-md hover:bg-orange-700 transition duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Contact Information</h2>
                        <p class="text-lg text-gray-600 mb-8">
                            Visit us or reach out via phone or email. We're here to assist you every step of the way.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center space-x-4">
                                <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10l9-7 9 7-9 7-9-7z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10v11a1 1 0 001 1h16a1 1 0 001-1V10" />
                                </svg>
                                <span>1234 Street Name, City, Country</span>
                            </li>
                            <li class="flex items-center space-x-4">
                                <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a3 3 0 003.22 0L21 8M3 8v10a1 1 0 001 1h16a1 1 0 001-1V8" />
                                </svg>
                                <span>info@kasigwamotors.com</span>
                            </li>
                            <li class="flex items-center space-x-4">
                                <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 10l4.94-4.94a1.5 1.5 0 00-2.12-2.12L12 7.88M4.06 15.06a1.5 1.5 0 002.12 2.12L12 16.12m4.94-4.94a1.5 1.5 0 112.12 2.12L12 12" />
                                </svg>
                                <span>+256 123 456 789</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="https://goo.gl/maps/example" target="_blank"
                                class="inline-block bg-orange-600 text-white font-medium py-3 px-6 rounded-md shadow-md hover:bg-orange-700 transition duration-300">
                                View on Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

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
