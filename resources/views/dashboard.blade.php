<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Trips Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-welcome /> -->
                <div>
                    <h1 class="text-2xl font-bold text-center text-white">Welcome to the Canada Trip Planner</h1>
                </div>
                <div>
                    <table class="text-white">
                        <tr>
                            <th>Trip</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>