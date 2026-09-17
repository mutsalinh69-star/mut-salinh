<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Website Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">General Configuration</h3>
                    
                    <form method="POST" action="#" onsubmit="event.preventDefault(); alert('Settings Saved!');">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Website Name</label>
                            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="UNLIMITED-MEDIA-SALINH">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Admin Contact Email</label>
                            <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="mutsalinh69@gmail.com">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="+855 95 505 158">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Footer Copyright Text</label>
                            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="© 2026 PTMS. All rights reserved. Built with Laravel.">
                        </div>

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 transition">
                            Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>