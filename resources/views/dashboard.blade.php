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
                    <div>
                        <a class="btn btn-success">Edit</a>
                        <a class="btn btn-info">Publish</a>
                        <a class="btn btn-primary">View</a>
                        <a class="btn btn-denger">Delete</a>
                        <a class="btn btn-success">SEO</a>
                        <a class="btn btn-info">Manager</a>
                        <a class="btn btn-primary">Account</a>
                        <a class="btn btn-denger">Editor</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
