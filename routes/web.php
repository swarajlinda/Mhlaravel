<?php

use App\Http\Controllers\AuthController;
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
Route::get('admin-page', function () {
    return view('admin.index');
});
Route::get('/checkin', function () {
    return view('checkin');
});
Route::get('/billing', function () {
    return view('billing');
});


// 
Route::controller(AuthController::class)->group(function () {
    Route::get("login", "loginForm");
    Route::post("login-process", "processLogin")->name('login.post');
    Route::get("logout", "logout")->name('logout');
});
