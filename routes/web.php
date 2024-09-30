<?php

use Illuminate\Support\Facades\Route;

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
    return view('site.pages.home');
})->name('home');

Route::get('home', function () {
    return view('site.pages.home');
})->name('home');

Route::get('majors', function () {
    return view('site.pages.majors');
})->name('major');

Route::get('doctors', function () {
    return view('site.pages.doctors');
})->name('doctor');

Route::get('contact-us', function () {
    return view('site.pages.contact');
})->name('contact');

Route::get('history', function () {
    return view('site.pages.history');
})->name('history');

Route::get('make-appointement', function () {
    return view('site.pages.appointement');
})->name('appointement');

Route::get('register', function () {
    return view('site.pages.register');
})->name('register');

Route::get('login', function () {
    return view('site.pages.login');
})->name('login');
