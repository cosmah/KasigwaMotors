<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="car_model" class="block text-sm font-medium text-gray-700">{{ __('Car Model') }}</label>
                <input
                    type="text"
                    name="car_model"
                    id="car_model"
                    placeholder="{{ __('Enter Car Model') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('car_model') }}"
                />
                <x-input-error :messages="$errors->get('car_model')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label for="car_make" class="block text-sm font-medium text-gray-700">{{ __('Car Make') }}</label>
                <input
                    type="text"
                    name="car_make"
                    id="car_make"
                    placeholder="{{ __('Enter Car Make') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('car_make') }}"
                />
                <x-input-error :messages="$errors->get('car_make')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">{{ __('Year') }}</label>
                <input
                    type="number"
                    name="year"
                    id="year"
                    placeholder="{{ __('Enter Year') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('year') }}"
                />
                <x-input-error :messages="$errors->get('year')" class="mt-2" />
            </div>
            <div class="mb-4">
                <label for="car_color" class="block text-sm font-medium text-gray-700">{{ __('Color') }}</label>
                <input
                    type="text"
                    name="car_color"
                    id="car_color"
                    placeholder="{{ __('Enter Color') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('car_color') }}"
                />
                <x-input-error :messages="$errors->get('car_color')" class="mt-2" />
            </div>
            <div class="mb-4">
                <label for="car_price" class="block text-sm font-medium text-gray-700">{{ __('Price') }}</label>
                <input
                    type="number"
                    name="car_price"
                    id="car_price"
                    placeholder="{{ __('Enter Price') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('car_price') }}"
                />
                <x-input-error :messages="$errors->get('car_price')" class="mt-2" />
            </div>
            <div class="mb-4">
                <label for="car_mileage" class="block text-sm font-medium text-gray-700">{{ __('Mileage') }}</label>
                <input
                    type="number"
                    name="car_mileage"
                    id="car_mileage"
                    placeholder="{{ __('Enter car mileage') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('car_mileage') }}"
                />
                <x-input-error :messages="$errors->get('car_mileage')" class="mt-2" />
            </div>
            <div class="mb-4">
                <label for="car_fuel" class="block text-sm font-medium text-gray-700">{{ __('Fuel Consumption') }}</label>
                <input
                    type="number"
                    name="car_fuel"
                    id="car_fuel"
                    placeholder="{{ __('Enter fuel consumption') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    value="{{ old('car_fuel') }}"
                />
                <x-input-error :messages="$errors->get('car_fuel')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label for="images" class="block text-sm font-medium text-gray-700">{{ __('Car Images (Select up to 5)') }}</label>
                <input
                    type="file"
                    name="images[]"
                    id="images"
                    multiple
                    accept="image/*"
                    max="5"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                />
                <p class="mt-1 text-sm text-gray-500">You can select multiple images (maximum 5)</p>
                <x-input-error :messages="$errors->get('images')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">{{ __('Add Car') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>