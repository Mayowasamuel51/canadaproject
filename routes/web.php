<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('login');
Route::get('register', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('register');


Route::get('/user/login', [PageContoller::class, 'login'])->name('user.login');

Route::get('/', [PageContoller::class, 'genreal_home'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });