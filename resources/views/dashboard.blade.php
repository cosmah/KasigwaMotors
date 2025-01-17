<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Car Hire Bookings Shortcut -->
                <a href="{{ route('hiring-summary') }}" class="block p-6 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V5a3 3 0 00-6 0v6m2 4h2m4 0a3 3 0 11-6 0H6m10 0h2M6 20h12a2 2 0 002-2v-2H4v2a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Car Hire Bookings</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Manage all your car hire bookings.</p>
                        </div>
                    </div>
                </a>

                <!-- Purchase Bookings Shortcut -->
                <a href="{{ route('summary') }}" class="block p-6 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3M20 6l-7 7 7 7" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Purchase Bookings</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">View and manage your purchase bookings.</p>
                        </div>
                    </div>
                </a>

                <!-- Contact Messages Shortcut -->
                <a href="{{ route('contacts.index') }}" class="block p-6 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Contact Messages</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">View and manage contact form submissions.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>