<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\View;

class Rooms {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Single Room',
                'price' => 35,
                'view' => 'Sea-View',
            ],
            [
                'id' => 2,
                'title' => 'Double Room',
                'price' => 45,
                'view' => 'Sea-View',
            ],
            [
                'id' => 3,
                'title' => 'Family Room',
                'price' => 55,
                'view' => 'Sea-View',
            ],
            [
                'id' => 4,
                'title' => 'Family Room',
                'price' => 50,
                'view' => 'Opposite View',
            ],
            [
                'id' => 5,
                'title' => 'Single Room',
                'price' => 25,
                'view' => 'Opposite View',
            ],
        ];
    }

    public static function find(int $id) {
        // Find the room by ID
        $room = Arr::first(static::all(), fn($room) => $room['id'] == $id);

        // If room is found, return the view, otherwise return 404
        if ($room) {
            return View::make('accommodation_detail', ['accommodation' => $room]);
        } else {
            abort(404); // Return 404 if room is not found
        }
    }
}
