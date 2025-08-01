<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/create-admin', function () {
    \App\Models\Admin::create([
        'name' => 'admin',
        'email' => 'admin@mysite.com',
        'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
    ]);
    return 'Admin created';
});
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

Route::middleware(['admin.session'])->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

// Show category creation form
    Route::get('/category/create', [AdminDashboardController::class, 'categoryIndex'])->name('category.index');
// Handle category creation
Route::post('/category', [AdminDashboardController::class, 'category'])->name('category.create');

    //   Route::post('/category', [AdminDashboardController::class , 'category'])->name('category.create');
    /// product Market place 
    Route::get('/product', [AdminDashboardController::class , 'product'])->name('product.index');
    Route::get('/product/create', [AdminDashboardController::class , 'productcreate'])->name('product.create');
    Route::post('/product', [AdminDashboardController::class , 'productStore'])->name('product.store');
    Route::get('/product/show/{id}', [AdminDashboardController::class , 'show'])->name('product.show');
    Route::get('/product/{id}/edit', [AdminDashboardController::class, 'edit'])->name('product.edit');
    Route::post('/product/{id}/update', [AdminDashboardController::class, 'update'])->name('product.update');

      // events 
    Route::get('/events', [EventsController::class , 'events'])->name('events.index');
    Route::get('/events/create', [EventsController::class , 'eventscreate'])->name('events.create');
    Route::post('/events', [EventsController::class , 'eventstore'])->name('events.store');
    Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::post('/events/{id}/update', [EventsController::class, 'update'])->name('events.update');
    // eventstore
});



require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });


///by laravel itself
// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
// });