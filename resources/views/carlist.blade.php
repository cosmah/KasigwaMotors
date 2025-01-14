<x-app-layout>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($cars as $car)
            <a href="{{ route('cars.vehicles', $car->id) }}"
                class="block p-6 flex space-x-2 hover:bg-gray-50">
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
</x-app-layout>