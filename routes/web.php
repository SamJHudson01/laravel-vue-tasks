<?php
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'message' => 'Hello from Inertia!',
    ]);
});

Route::get('/test-layout', function () {
    return view('layouts.app', ['page' => []]); // Explicitly resolve the layout
});



