<!-- resources/views/accommodation.blade.php -->
<x-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Select based on your Availability</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach($rooms as $room)
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <a href="/accommodation/{{ $room['id'] }}">
                                <img src="https://www.hotelmonterey.co.jp/upload_file/monhtyo/stay/sng_600_001.jpg" alt="Room Image" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </a>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="/accommodation/{{ $room['id'] }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $room['view'] }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $room['title'] }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $room['price'] }} / Per Night</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
