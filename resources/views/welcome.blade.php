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
                <div>
                    <h2>Featured Cars</h2>
                </div>
                <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                    @foreach ($cars as $car)
                        <div class="p-6 flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-gray-800">
                                            {{ $car->user->name }}
                                        </span>
                                        @unless ($car->created_at->eq($car->updated_at))
                                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                        @endunless
                                    </div>
                                    @if ($car->user->is(auth()->user()))
                                        <x-dropdown>

                                            <x-slot name="trigger">

                                                <button>

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                                        fill="currentColor">

                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />

                                                    </svg>

                                                </button>

                                            </x-slot>

                                            <x-slot name="content">

                                                <x-dropdown-link :href="route('cars.edit', $car)">

                                                    {{ __('Edit') }}

                                                </x-dropdown-link>
                                                <form method="POST" action="{{ route('cars.destroy', $car) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('cars.destroy', $car)"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Delete') }}
                                                    </x-dropdown-link>
                                                </form>

                                            </x-slot>

                                        </x-dropdown>
                                    @endif
                                </div>
                                @if ($car->images)
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                                        @foreach ($car->images as $imagePath)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('storage/' . $imagePath) }}" alt="Car Image"
                                                    class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                <p class="mt-4 text-lg text-gray-900">
                                    {{ $car->car_model }}
                                </p>
                                <p class="mt-2 text-sm text-gray-600">
                                    {{ $car->car_make }}
                                </p>
                                <p class="mt-2 text-sm text-gray-600">
                                    {{ $car->year }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
    </div>

    </main>

    </div>



</body>

</html>
