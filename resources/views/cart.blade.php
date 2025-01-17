<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasigwa Motors Uganda - Order Summary</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen">
        <header class="bg-white shadow">
            <nav class="flex justify-between items-center w-full px-4 py-4">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Kasigwa Motors Uganda" class="w-auto h-12" />
                </div>
                <div class="hidden md:flex space-x-4">
                    <a href="/" class="nav-link hover:text-gray-700">Home</a>
                    <a href="/sales" class="nav-link hover:text-gray-700">Cars for Sale</a>
                    <a href="/hire" class="nav-link hover:text-gray-700">Hire a Car</a>
                    <a href="/about" class="nav-link hover:text-gray-700">About Us</a>
                    <a href="/contact" class="nav-link hover:text-gray-700">Contact Us</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </nav>
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Home</a>
                <a href="/sales" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Cars for Sale</a>
                <a href="/hire" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Hire a Car</a>
                <a href="/about" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">About Us</a>
                <a href="/contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Contact Us</a>
            </div>
        </header>

        <main class="container mx-auto px-4 py-8">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Order Summary</h1>

                <!-- Customer Information -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-orange-600 mb-4">Customer Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Name:</p>
                            <p class="font-semibold">{{ $formData['name'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">National ID:</p>
                            <p class="font-semibold">{{ $formData['nin'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Email:</p>
                            <p class="font-semibold">{{ $formData['email'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Phone:</p>
                            <p class="font-semibold">{{ $formData['phone'] }}</p>
                        </div>
                        <div class="col-span-1 md:col-span-2">
                            <p class="text-gray-600">Address:</p>
                            <p class="font-semibold">{{ $formData['address'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Vehicle Information -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-orange-600 mb-4">Vehicle Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Model:</p>
                            <p class="font-semibold">{{ $formData['car_model'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Make:</p>
                            <p class="font-semibold">{{ $formData['car_make'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Color:</p>
                            <p class="font-semibold">{{ $formData['car_color'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Year:</p>
                            <p class="font-semibold">{{ $formData['year'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Mileage:</p>
                            <p class="font-semibold">{{ $formData['car_mileage'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Fuel Type:</p>
                            <p class="font-semibold">{{ $formData['car_fuel'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="mb-8 bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-semibold text-orange-600 mb-4">Order Details</h2>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Price per Unit:</span>
                            <span class="font-semibold">UGX {{ number_format($formData['car_price'], 2) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Quantity:</span>
                            <span class="font-semibold">{{ $formData['car_quantity'] }}</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold text-orange-600 pt-2 border-t">
                            <span>Total Amount:</span>
                            <span>UGX {{ number_format($totalCost, 2) }}</span>
                        </div>
                    </div>
                </div>

                <!-- Additional Message -->
                @if($formData['message'])
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-orange-600 mb-4">Additional Message</h2>
                    <p class="text-gray-700">{{ $formData['message'] }}</p>
                </div>
                @endif

                <!-- Submit Form -->
                <form method="POST" action="{{ route('books.store') }}" class="text-center">
                    @csrf
                    @foreach($formData as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    <button type="submit" class="bg-orange-600 text-white px-8 py-3 rounded-lg hover:bg-orange-700 transition-colors text-lg font-semibold">
                        Confirm Purchase
                    </button>
                </form>
            </div>
        </main>

        <footer class="bg-gray-900 text-white mt-12 py-8">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} Kasigwa Motors Uganda. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>