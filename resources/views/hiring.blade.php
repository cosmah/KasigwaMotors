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
                <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">Hire a Car</h1>
                <form method="POST" action="{{ route('show.carts') }}">
                    @csrf
                    <div class="m-5 ml-0 text-2xl text-orange-900">
                        <h1>User Data</h1>
                    </div>
                    <div class="mb-4">
                        <label for="name"
                            class="block text-sm font-medium text-gray-700">{{ __('Full Name') }}</label>
                        <input type="text" name="name" id="name"
                            placeholder="{{ __('Enter your full name') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('name') }}" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="nin"
                            class="block text-sm font-medium text-gray-700">{{ __('National Id Number') }}</label>
                        <input type="text" name="nin" id="nin" placeholder="{{ __('Enter your nin') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('nin') }}" required />
                        <x-input-error :messages="$errors->get('nin')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="address"
                            class="block text-sm font-medium text-gray-700">{{ __('Home Address') }}</label>
                        <input type="text" name="address" id="address"
                            placeholder="{{ __('Enter your address') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('address') }}" required />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="email"
                            class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                        <input type="email" name="email" id="email"
                            placeholder="{{ __('Enter your email address') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('email') }}" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="phone"
                            class="block text-sm font-medium text-gray-700">{{ __('Phone Number') }}</label>
                        <input type="tel" name="phone" id="phone"
                            placeholder="{{ __('Enter your phone number') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('phone') }}" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                    <div class="m-5 ml-0 text-2xl text-orange-900">
                        <h1>Vehicle Data</h1>
                    </div>
                    <div class="mb-4">
                        <label for="car_model"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Model') }}</label>
                        <input type="text" name="car_model" id="car_model"
                            placeholder="{{ __('Enter Car Model') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('car_model', $car->car_model) }}" readonly />
                        <x-input-error :messages="$errors->get('car_model')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="car_make"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Make') }}</label>
                        <input type="text" name="car_make" id="car_make"
                            placeholder="{{ __('Enter Car Make') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('car_make', $car->car_make) }}" readonly />
                        <x-input-error :messages="$errors->get('car_make')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="car_color"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Color') }}</label>
                        <input type="text" name="car_color" id="car_color" placeholder="{{ __('Car Color') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('car_color', $car->car_color) }}" readonly />
                        <x-input-error :messages="$errors->get('car_color')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="car_price"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Price') }}</label>
                        <input type="number" name="car_price" id="car_price"
                            placeholder="{{ __('Enter Car Price') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('car_price', $car->car_price) }}" readonly />
                        <x-input-error :messages="$errors->get('car_price')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="car_mileage"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Mileage') }}</label>
                        <input type="text" name="car_mileage" id="car_mileage"
                            placeholder="{{ __('Car Mileage') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('car_mileage', $car->car_mileage) }}" readonly />
                        <x-input-error :messages="$errors->get('car_mileage')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="year"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Year of Make') }}</label>
                        <input type="text" name="year" id="year"
                            placeholder="{{ __('Car year of make') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('year', $car->year) }}" readonly />
                        <x-input-error :messages="$errors->get('year')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="car_quantity"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Quantity') }}</label>
                        <input type="number" name="car_quantity" id="car_quantity"
                            placeholder="{{ __('Car Quantity Needed') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('quantity') }}" required />
                        <x-input-error :messages="$errors->get('car_quantity')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="car_fuel"
                            class="block text-sm font-medium text-gray-700">{{ __('Car Fuel') }}</label>
                        <input type="text" name="car_fuel" id="car_fuel"
                            placeholder="{{ __('Car Fuel Consumption') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            value="{{ old('car_fuel', $car->car_fuel) }}" readonly />
                        <x-input-error :messages="$errors->get('car_fuel')" class="mt-2" />
                    </div>
                    <div class="m-5 ml-0 text-2xl text-orange-900">
                        <h1>Buyer's Note</h1>
                    </div>
                    <div class="mb-4">
                        <label for="message"
                            class="block text-sm font-medium text-gray-700">{{ __('Additional Message') }}</label>
                        <textarea name="message" id="message" placeholder="{{ __('Would you like to say somthing ?') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            rows="4">{{ old('message') }}</textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>
                    <div class="btn-2">
                        <button type="submit" class="button">Continue</button>
                    </div>
                </form>
            </div>
        </main>
        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>


</body>

</html>
