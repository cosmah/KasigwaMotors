<!-- resources/views/contacts/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Contact Information</h3>
                    <dl class="mt-4 space-y-4">
                        <div>
                            <dt class="font-medium text-gray-700 dark:text-gray-300">Name:</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100">{{ $contact->name }}</dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-700 dark:text-gray-300">Email:</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100">{{ $contact->email }}</dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-700 dark:text-gray-300">Message:</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100">{{ $contact->message }}</dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-700 dark:text-gray-300">Submitted At:</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100">{{ $contact->created_at->format('M d, Y H:i') }}</dd>
                        </div>
                    </dl>
                    <div class="mt-6">
                        <a href="{{ route('contacts.index') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                            Back to Contacts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
