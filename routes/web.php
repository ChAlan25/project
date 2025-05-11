<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    $condition = request('condition', true); // Default to true if not provided
    return view('login', compact('condition'));
});