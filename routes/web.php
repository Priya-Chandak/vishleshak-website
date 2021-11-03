<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Home
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

# About Us
Route::get('/about-us', function () {
    return view('about_us');
});

# Clients
Route::get('/clients', function () {
    return view('clients');
});

# Contact
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', 'ContactusController@storeContactDetails');
# Products
Route::get('/products', function () {
    return view('products');
});

# Services
Route::get('/services', function () {
    return view('services');
});

# privacy-policy
Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});

# terms-conditions
Route::get('/terms-conditions', function () {
    return view('terms_conditions');
});
