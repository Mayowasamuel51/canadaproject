<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/// admin login  
Route::get('/admin/login', [AdminDashboardController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminDashboardController::class, 'login'])->name('admin.login.submit');




/// user own 
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::get('register', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('register');



Route::get('/user/login', [PageContoller::class, 'login'])->name('user.login'); // am not using this 
Route::get('/', [PageContoller::class, 'genreal_home'])->name('home');;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/blogs', [ProfileController::class, 'myblog'])->name('profile.myblogs');;
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['admin.session'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
      Route::get('/function', [AdminDashboardController::class, 'adminfunction']);
});
require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });


///by laravel itself
// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
// });