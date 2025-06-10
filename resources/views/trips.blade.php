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
                            <th>Number of People</th>
                            <th>Confirmed Bookings</th>
                            <th>Pending Bookings</th>
                            <th>Cancelled Bookings</th>
                            <th>Total Revenue</th>
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
                            <td>{{$trip->number_of_people}}</td>
                            <td>{{$trip->confirmed_bookings}}</td>
                            <td>{{$trip->pending_bookings}}</td>
                            <td>{{$trip->cancelled_bookings}}</td>
                            <td>{{$trip->total_revenue}}</td>
                        </tr>
                        <tr>
                            @empty
                        <tr>
                            <td colspan="4" class="text-center">No trips found</td>
                        </tr>
                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>