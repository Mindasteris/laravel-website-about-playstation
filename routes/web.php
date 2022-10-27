<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Auth;
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
// Menu Links - Main Page
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Hardware Page
Route::get('/hardware', function () {
    return view('hardware');
});

// History Page
Route::get('/history', function () {
    return view('history');
});

// Contact Page
Route::get('/contact', [ContactUsController::class, 'contactFormView']);
Route::post('/contact', [ContactUsController::class, 'contactFormLogic']);

// Gallery for Consoles - Pages
Route::get('/hardware/gallery/playstation1', function () {
    return view('gallery.ps1-gallery');
});

Route::get('/hardware/gallery/playstation2', function () {
    return view('gallery.ps2-gallery');
});

Route::get('/hardware/gallery/playstation3', function () {
    return view('gallery.ps3-gallery');
});

Route::get('/hardware/gallery/playstation4', function () {
    return view('gallery.ps4-gallery');
});

Route::get('/hardware/gallery/playstation5', function () {
    return view('gallery.ps5-gallery');
});