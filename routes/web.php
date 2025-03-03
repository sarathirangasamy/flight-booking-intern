<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [BookingController::class, 'home'])->name('home');

//Booking//
Route::get('/booking', [BookingController::class, 'booking'])->middleware('auth')->name('booking');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

//Auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Custom Registration for Admin
Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'registerAdmin']);

// Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/bookings', [AdminController::class, 'index'])->name('admin.bookings');
    Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::post('/admin/bookings/update-status/{id}', [AdminController::class, 'updateBookingStatus'])->name('admin.bookings.updateStatus');

// });

