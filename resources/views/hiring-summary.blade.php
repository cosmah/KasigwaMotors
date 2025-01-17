<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Car Hirings Summary') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Summary of Cars Booked for Hiring</h3>
                    <table class="table-auto w-full text-left border-collapse border border-gray-300 dark:border-gray-700">
                        <thead class="bg-gray-200 dark:bg-gray-700">
                            <tr>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">#</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Booking Date</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Name</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Car Model</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Car Make</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Total Cost (UGX)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($carhirings as $carhiring)
                                <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700"
                                onclick="window.location='{{ route('carhirings.hiringdetails', ['id' => $carhiring->id]) }}';">
                                    
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $carhiring->index }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ \Carbon\Carbon::parse($carhiring->created_at)->format('F j, Y, g:i a') }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $carhiring->name }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $carhiring->car_model }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $carhiring->car_make }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">UGX {{ number_format($carhiring->total_cost, 2) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center border border-gray-300 dark:border-gray-700 px-4 py-2">No carhirings found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
