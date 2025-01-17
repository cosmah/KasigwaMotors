<x-app-layout>
    <div class="mt-6 bg-white shadow-lg rounded-lg divide-y space-y-4">
        @foreach ($cars as $car)
            <!-- Make the entire row clickable by wrapping it with <a> -->

            <div class="p-6 flex space-x-4 hover:bg-gray-50 transition duration-300 rounded-lg shadow-sm">
                <!-- Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>

                <!-- Car Info -->
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-lg font-semibold text-gray-800">
                                {{ $car->user->name }}
                            </span>
                            @unless ($car->created_at->eq($car->updated_at))
                                <small class="text-sm text-gray-600"> &middot; {{ __('Edited') }}</small>
                            @endunless
                        </div>

                        <!-- Dropdown Actions -->
                        @if ($car->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            viewBox="0 0 20 20" fill="currentColor">
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
                    <a href="{{ route('motors', $car->id) }}" class="block">
                        <!-- Car Images -->
                        @if ($car->images)
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                                @foreach ($car->images as $imagePath)
                                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                                        <img src="{{ asset('storage/' . $imagePath) }}" alt="Car Image"
                                            class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105 rounded-md">
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Car Info -->
                        <div class="mt-4">
                            <p class="text-xl font-semibold text-gray-900">{{ $car->car_model }}</p>
                            <p class="text-lg text-gray-600">{{ $car->car_make }} | {{ $car->year }}</p>
                        </div>
                     </a>    
                </div>
               
            </div>
        @endforeach
    </div>
</x-app-layout>
