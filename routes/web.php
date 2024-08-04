<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Shop route


// Product route
Route::get('/products', function () {
    return view('frontend.products');
})->name('product');

// Course route
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Contact route
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


//dashboard
Route::get('/dashboard', function () {
    return view('frontend.after_login.dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
