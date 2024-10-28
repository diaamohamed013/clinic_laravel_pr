<?php

use App\Http\Controllers\site\AppointementController;
use App\Http\Controllers\site\auth\LoginController;
use App\Http\Controllers\site\auth\LogoutController;
use App\Http\Controllers\site\auth\RegisterController;
use App\Http\Controllers\site\ContactController;
use App\Http\Controllers\site\DoctorController;
use App\Http\Controllers\site\HistoryController;
use App\Http\Controllers\site\MajorController;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\PatientController;
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


Route::as('site.')->group(function(){

    Route::middleware('auth')->group(function(){
        Route::post('logout', LogoutController::class)->name('logout');
    });
    Route::get('/', HomeController::class)->name('home');
    Route::get('home', HomeController::class)->name('home');
    Route::get('history', HistoryController::class)->name('history');
    Route::get('majors', MajorController::class)->name('majors');
    Route::get('doctors', DoctorController::class)->name('doctors');
    Route::get('appointement/{id}', [PatientController::class,'index'])->name('appointement');
    Route::post('appointement/{id}', [PatientController::class, 'store'])->name('appointement.store');

    Route::get('contact-us', [ContactController::class, 'show'])->name('contact.show');
    Route::post('contact-us', [ContactController::class, 'contactUs'])->name('contact.store');
    Route::get('login',[LoginController::class,'show'] )->name('login.show');
    Route::get('register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('register', [RegisterController::class, 'register'])->name('register.store');
});



// admin web links
require_once 'admin.php';
