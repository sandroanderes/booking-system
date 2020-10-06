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
    return view('pages.home');
});

Route::get('/Kalender', function () {
    return view('pages.calendar');
});

Route::get('/Funktionen', function () {
    return view('pages.functions');
});

Route::get('/Über uns', function () {
    return view('pages.about');
});

Route::get('/Support', function () {
    return view('pages.support');
});
