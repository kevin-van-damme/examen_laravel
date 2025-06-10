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
                <div class="p-10">
                    <h1 class="text-4xl font-bold text-center text-white text-bold">Welcome to the Canada Trip Planner</h1>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center mt-10">
                    <table class="text-white w-full">
                        <tr class="text-2xl">
                            <th>Region</th>
                            <th>Trip</th>
                            <th>Start Date</th>
                            <th>Duration Days</th>
                            <th>Price Per Person</th>
                        </tr>
                        @forelse ($trips as $trip)
                        <tr class="text-center">
                            <td>{{ $trip->region }}</td>
                            <td>{{ $trip->title }}</td>
                            <td>{{ $trip->start_date }}</td>
                            @if ($trip->duration_days > 1)
                            <td>{{ $trip->duration_days }} days</td>
                            @else
                            <td>{{ $trip->duration_days }} day</td>
                            @endif
                            <td>{{ $trip->price_per_person }}</td>
                        </tr>
                        <tr>
                            @empty
                        <tr>
                            <td colspan="4" class="text-center">No trips found</td>
                        </tr>
                        @endforelse
                    </table>
                    <table class="text-white w-full">

                        <tr class="flex flex-row justify-between text-xl ml-10">
                            @foreach ($trips as $trip)
                            <th class="text-green-200">Total Confirmed Bookings: {{ $trip->confirmed_bookings }}</th>
                            <th class="text-yellow-200">Total Pending Bookings: {{ $trip->pending_bookings }}</th>
                            <th class="text-red-200">Total Cancelled Bookings: {{ $trip->cancelled_bookings }}</th>
                            <th class="text-blue-200">
                                Total Revenue: {{ $trip->total_revenue }}
                            </th>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>