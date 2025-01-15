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
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <form method="POST" action="{{ route('books.store') }}">
                    @csrf
                    <textarea
                        name="message"
                        placeholder="{{ __('What\'s on your mind?') }}"
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >{{ old('message') }}</textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <x-primary-button class="mt-4">{{ __('Book') }}</x-primary-button>
                </form>
            </div>
        </main>
        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>


    < </body>

</html>
