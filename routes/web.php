<?php

use App\Http\Controllers\Admin\CheckController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/classic', function () {
    return view('classic');
});
Route::get('/business', function () {
    return view('business');
});
Route::get('/suite', function () {
    return view('suite');
});
Route::get('/deluxe', function () {
    return view('deluxe');
});

Route::get('/checkin', function () {
    return view('checkin');
});
Route::get('/billing', function () {
    return view('billing');
});
Route::get('/billingnew', function () {
    return view('billingnew');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

// 
Route::controller(BookingController::class)->group(function () {
    Route::get("book-room", "bookRoom")->name('book-room');
});


// Autheticated routes here

Route::middleware('auth')->group(function () {
    Route::get('admin-page', function () {
        return view('admin.index');
    });

    // 
    Route::controller(CheckController::class)->group(function () {
        Route::get('check-in', 'checkIn')->name('check.in');
        Route::post('post-check-in', 'postCheckIn')->name('post.check.in');
        Route::get('billing/{id}', 'billing')->name('billing');
    });

    // 
    Route::controller(BookingController::class)->group(function () {
        Route::get("booking-requests", "bookingRequests")->name('booking-requests');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get("login", "loginForm")->name('login');
    Route::post("login-process", "processLogin")->name('login.post');
    Route::get("logout", "logout")->name('logout');
});
