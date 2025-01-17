<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <!-- Car Orders for Sale -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('orders.sale') }}" class="block p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 3v18M3 3l18 18"></path>
                            </svg>
                            <div class="ml-4">
                                <div class="text-lg font-semibold">{{ $saleOrdersCount }}</div>
                                <div class="text-sm">{{ __('Car Orders for Sale') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Car Orders for Hire -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('orders.hire') }}" class="block p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 3v18M3 3l18 18"></path>
                            </svg>
                            <div class="ml-4">
                                <div class="text-lg font-semibold">{{ $hireOrdersCount }}</div>
                                <div class="text-sm">{{ __('Car Orders for Hire') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- User Mails -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('mails.index') }}" class="block p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 3v18M3 3l18 18"></path>
                            </svg>
                            <div class="ml-4">
                                <div class="text-lg font-semibold">{{ $userMailsCount }}</div>
                                <div class="text-sm">{{ __('User Mails') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
