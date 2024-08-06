<!-- resources/views/accommodation_detail.blade.php -->
<x-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">{{ $accommodation['title'] }}</h1>
            <p class="mt-1 text-sm text-gray-500">View: {{ $accommodation['view'] }}</p>
            <p class="text-sm font-medium text-gray-900">Price: ${{ $accommodation['price'] }} / Per Night</p>
        </div>
    </div>
</x-layout>
