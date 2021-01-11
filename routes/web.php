<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuecherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\geBuechtController;
use App\Orchid\Screens\PlatformScreen;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/buecher', [BuecherController::class, 'index']);

Route::get('/buecher/{buecherKey}', [SinglePageController::class, 'index']);

Route::get('/funktionen', function () {
    return view('pages.functions');
});

Route::get('/support', function () {
    return view('pages.support');
});

Route::get('/ueber', function () {
    return view('pages.about');
});

Route::post('/buecher/storegastro', [geBuechtController::class, 'store']);

Route::screen('/main', PlatformScreen::class)
->middleware(['auth:sanctum', 'verified'])
->name('platform.main');
