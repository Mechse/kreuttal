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

Route::get('/', function () {
    return view('index');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/calender', function () {
    return view('forms.calender');
});

Route::get('/club', function () {
    return view('club');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/imprint', function () {
    return view('sections.imprint');
});

Route::get('/agb', function () {
    return view('sections.agb');
});

Route::get('/dataprotection', function () {
    return view('sections.dataprotection');
});

Route::get('/horses', function () {
    return view('horses');
});

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/booking', function () {
    return view('forms.booking');
});

Route::get('/calender', function () {
    return view('forms.calender');
});
