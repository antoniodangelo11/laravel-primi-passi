<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

// Route::view('/contacts', 'contacts')->name('contacts');

Route::get('/gallery', function () {
    return view('gallery');
});

// Route::view('/gallery', 'gallery')->name('gallery');

Route::get('/faq', function () {
    return view('faq');
});

// Route::view('/faq', 'faq')->name('faq');

Route::get('/rules', function () {
    return view('rules');
});

// Route::view('/rules', 'rules')->name('rules');