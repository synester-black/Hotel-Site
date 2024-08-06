<?php

use Illuminate\Support\Facades\Route;
use App\Models\Rooms;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello!',
        'user' => 'Sandaru'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/accommodation', function () {
    return view('accommodation', [
        'rooms' => Rooms::all()
    ]);
});

Route::get('/accommodation/{id}', function ($id) {
    return Rooms::find($id); // Rooms::find already returns the view
});

Route::get('/specialoffers', function () {
    return view('offers');
});
