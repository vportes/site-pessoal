<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestbookController;

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
    return view('home');
})->name('home');

Route::get('/guestbook', [GuestbookController::class, 'showGuestbook'])->name('guestbook');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/message', function () {
    return view('message');
})->name('message.form');

Route::post('/post', [GuestbookController::class, 'postMessage'])->name('post.message');