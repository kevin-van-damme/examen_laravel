<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Trips') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-welcome /> -->
                <div>
                    <h1 class="text-2xl font-bold text-center text-white text-bold">Welcome to the Canada Trip Planner</h1>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center mt-10">
                    <table class="text-white w-full border-2">
                        <tr class="text-2xl">
                            <th>Trip</th>
                            <th>Start Date</th>
                            <th>Price Per Person</th>
                        </tr>
                        @forelse ($trips as $trip)
                        <tr class="text-center">
                            <td>{{ $trip->title }}</td>
                            <td>{{ $trip->start_date }}</td>
                            <td>{{ $trip->price_per_person }}</td>
                        </tr>
                        <tr>
                            @empty
                        <tr>
                            <td colspan="4" class="text-center">No trips found</td>
                        </tr>
                        @endforelse
                    </table>
                    <table class="text-white w-full border-2">
                        <tr class="flex flex-row justify-end text-4xl ml-10">
                            <th></th>
                            <th></th>
                            <th>{{ $trip->sum('price_per_person') }}</th>
                            <th>Total Revenue</th>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>