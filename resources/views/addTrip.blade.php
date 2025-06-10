<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Trip') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto bg-slate-800 rounded-xl flex flex-col mt-10  sm:px-6 lg:px-">
        <h1 class="text-4xl font-bold text-center text-white mt-10">Add Trip</h1>
        <form action="{{ route('trips.store') }}" method="post" class="text-xl flex flex-col gap-4 mt-10 w-full">
            @csrf
            <div class="flex flex-col gap-1">
                <label for="title" class="text-white">Title<i class="text-red-500">*</i></label>
                <input type="text" name="title" id="title" class="rounded-md p-2 w-1/3">
            </div>
            <div class="flex flex-col gap-1">
                <label for="region" class="text-white">Region<i class="text-red-500">*</i></label>
                <select name="region" id="region" class="rounded-md p-2 w-1/3">
                    <option value="east">East</option>
                    <option value="west">West</option>
                    <option value="north">North</option>
                    <option value="central">Central</option>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="start_date" class="text-white">Start Date<i class="text-red-500">*</i></label>
                <input type="date" name="start_date" id="start_date" class="rounded-md p-2 w-1/3">
            </div>
            <div class="flex flex-col gap-1">
                <label for="number_of_people" class="text-white">Number of people<i class="text-red-500">*</i></label>
                <input type="number" name="number_of_people" id="number_of_people" class="rounded-md p-2 w-1/3">
            </div>
            <div class="flex flex-col gap-1">
                <label for="duration_days" class="text-white">Duration(in days)<i class="text-red-500">*</i></label>
                <input type="number" name="duration_days" id="duration_days" class="rounded-md p-2 w-1/3">
            </div>
            <div class="flex flex-col gap-1">
                <label for="price_per_person" class="text-white">Price Per Person<i class="text-red-500">*</i></label>
                <input type="number" name="price_per_person" id="price_per_person" class="rounded-md p-2 w-1/3">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 rounded-md px-20 my-5 w-1/3 hover:bg-blue-800 transition-all ease-in-out">Add Trip</button>
        </form>
    </div>
</x-app-layout>