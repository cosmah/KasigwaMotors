<x-app-layout>
    <div class="bg-white shadow-sm rounded-lg p-6">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                @if ($car->images)
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ($car->images as $imagePath)
                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                <img src="{{ asset('storage/' . $imagePath) }}" alt="Car Image"
                                    class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="md:w-1/2 md:pl-6 mt-6 md:mt-0">
                <div class="">
                    <h1 class="text-2xl font-bold text-gray-900 flex items-center">
                        <img src="{{ asset('images/model.svg') }}"class="w-8 h-auto mr-2" />
                        {{ $car->car_model }}
                    </h1>
                </div>

                <p class="mt-2 text-lg text-gray-600 flex items-center">
                    <img src="{{ asset('images/car.svg') }} " class="w-8 h-auto mr-2" />
                    {{ $car->car_make }}
                </p>
                <p class="mt-2 text-lg text-gray-600 flex items-center">
                    <img src="{{ asset('images/year.svg') }} " class="w-8 h-auto mr-2" />
                    {{ $car->year }}
                </p>
                <p class="mt-2 text-lg text-gray-600 flex items-center">
                    <img src="{{ asset('images/desc.svg') }} " class="w-8 h-auto mr-2" />
                    {{ $car->car_color }}

                </p>
                <p class="mt-2 text-lg text-gray-600 flex items-center">
                    <img src="{{ asset('images/fuel.svg') }} " class="w-8 h-auto mr-2" />
                    {{ $car->car_fuel }} km/l

                </p>
                <p class="mt-2 text-lg text-gray-600 flex items-center">
                    <img src="{{ asset('images/mile.svg') }} " class="w-8 h-auto mr-2" />
                    {{ $car->car_mileage }} KM

                </p>
                <p class="mt-2 text-lg text-gray-600 flex items-center">
                    <img src="{{ asset('images/desc.svg') }} " class="w-8 h-auto mr-2" />
                    UGX. {{ $car->car_price }}

                </p>
            </div>
        </div>

            </div>
        </div>
    </div>
</x-app-layout>