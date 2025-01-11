<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return inertia('About', ['user' => 'BOREN']);
});

Route::inertia('/contact', 'Contact', ['phone' => '010530990']);