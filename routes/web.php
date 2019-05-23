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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/clients', function () {
    return view('pages.clients');
});

Route::get('/spotlights', function () {
    return view('pages.spotlights');
});

Route::get('/books', function () {
    return view('pages.books');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admin', function () {
    return view('pages.admin');
});

