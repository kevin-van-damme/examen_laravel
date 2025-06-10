<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Trip') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-">
        <h1 class="text-2xl font-bold text-center text-white">Add Trip</h1>
        <form action="{{ route('trips.store') }}" method="post">
            @csrf
            <div>
                <label for="title" class="text-white">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="region" class="text-white">Region</label>
                <select name="region" id="region">
                    <option value="east">East</option>
                    <option value="west">West</option>
                    <option value="north">North</option>
                    <option value="central">Central</option>
                </select>
            </div>
            <div>
                <label for="start_date" class="text-white">Start Date</label>
                <input type="date" name="start_date" id="start_date">
            </div>
            <div>
                <label for="duration_days" class="text-white">Duration Days</label>
                <input type="number" name="duration_days" id="duration_days">
            </div>
            <div>
                <label for="price_per_person" class="text-white">Price Per Person</label>
                <input type="number" name="price_per_person" id="price_per_person">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Trip</button>
        </form>
    </div>
</x-app-layout>