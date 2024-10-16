<?php

use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\auth\LogoutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\MajorController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin/')->as('admin.')->group(function () {

    Route::middleware('auth')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::post('logout', LogoutController::class)->name('auth.logout');
        Route::resource('majors', MajorController::class);
        Route::resource('doctors', DoctorController::class);

    });
    Route::get('login', [LoginController::class, 'login'])->name('auth.login.show');
    Route::post('login', [LoginController::class, 'authentication'])->name('auth.login');

});


// Route::get('/', [HomeController::class, 'loginDash'])->name('admin.login');


// Route::get('create', function () {
//     return view('admin.pages.majors.create');
// })->name('admin.majors.create');

// Route::get('edit', function () {
//     return view('admin.pages.majors.edit');
// })->name('admin.majors.edit');
